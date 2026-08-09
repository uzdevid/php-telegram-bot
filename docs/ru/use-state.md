# Хранение состояния пользователя

`UzDevid\Telegram\Bot\State\StateStorageInterface` — небольшой интерфейс, независимый от способа
хранения, предназначенный для сохранения произвольного состояния между апдейтами: например,
текущий шаг сценария регистрации/онбординга, временные данные формы, собранные за несколько
сообщений, или позиция конечного автомата (FSM), привязанная к пользователю или чату.

Сама библиотека не диктует, *где* хранится это состояние. Вы реализуете интерфейс поверх любого
подходящего вашему приложению хранилища — PHP-сессии, Redis, Memcached, таблица в базе данных,
массив в памяти для тестов и т.д. Готовая реализация на основе сессий уже включена в пакет.

## Интерфейс

```php
<?php

namespace UzDevid\Telegram\Bot\State;

interface StateStorageInterface {
    public function set(string $key, mixed $value): void;

    public function get(string $key, mixed $default = null): mixed;

    public function has(string $key): bool;

    public function delete(string $key): void;
}
```

- **`set(string $key, mixed $value): void`** — сохраняет значение по ключу.
- **`get(string $key, mixed $default = null): mixed`** — возвращает значение, либо `$default`, если оно не установлено.
- **`has(string $key): bool`** — проверяет, существует ли значение по ключу.
- **`delete(string $key): void`** — удаляет значение по ключу.

Фиксированного формата ключа нет — общепринятый подход — включать в ключ идентификатор
пользователя/чата, например `"user:{$userId}:state"` или
`"user:{$userId}:registration:step"`, чтобы состояние разных пользователей не пересекалось.

## Готовая реализация: PHP-сессии

`UzDevid\Telegram\Bot\State\SessionStateStorage` реализует `StateStorageInterface` поверх
нативных PHP-сессий (`$_SESSION`). Хорошо подходит для классических веб-приложений на PHP, где
сессия уже доступна (например, вебхук, обрабатываемый внутри обычного веб-приложения с
маршрутизацией на основе сессий).

```php
<?php

use UzDevid\Telegram\Bot\State\SessionStateStorage;

$state = new SessionStateStorage();

$state->set('user:123:registration:step', 'awaiting_phone');

if ($state->has('user:123:registration:step')) {
    $step = $state->get('user:123:registration:step');
}

$state->delete('user:123:registration:step');
```

> Для long-polling/CLI-ботов, а также для развёртываний на нескольких серверах PHP-сессии обычно
> не подходят (они привязаны к одному циклу запрос/ответ и cookie сессии). В этом случае
> реализуйте `StateStorageInterface` поверх общего хранилища — см. ниже.

## Собственные реализации

Поскольку ваши обработчики зависят только от `StateStorageInterface`, вы можете подключить любой
бэкенд, не меняя бизнес-логику. Например, реализация на Redis:

```php
<?php

use UzDevid\Telegram\Bot\State\StateStorageInterface;

class RedisStateStorage implements StateStorageInterface {
    public function __construct(private readonly \Redis $redis) {
    }

    public function set(string $key, mixed $value): void {
        $this->redis->set($key, serialize($value));
    }

    public function get(string $key, mixed $default = null): mixed {
        $value = $this->redis->get($key);
        return $value === false ? $default : unserialize($value);
    }

    public function has(string $key): bool {
        return (bool)$this->redis->exists($key);
    }

    public function delete(string $key): void {
        $this->redis->del($key);
    }
}
```

Та же схема подходит для таблицы в базе данных, Memcached, кэша в массиве и т.д.

## Пример: сценарий регистрации

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\State\StateStorageInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class RegistrationMessageHandler implements MessageHandlerInterface {
    public function __construct(private readonly StateStorageInterface $state) {
    }

    public function canHandle(MessageUpdate $update): bool {
        $key = "user:{$update->message->from->id}:registration:step";
        return $this->state->has($key);
    }

    public function handle(MessageUpdate $update): void {
        $userId = $update->message->from->id;
        $key = "user:{$userId}:registration:step";

        $step = $this->state->get($key);

        if ($step === 'awaiting_phone') {
            // сохраняем номер телефона из $update->message->contact/text ...
            $this->state->set($key, 'awaiting_name');
            return;
        }

        if ($step === 'awaiting_name') {
            // сохраняем имя, регистрация завершена
            $this->state->delete($key);
        }
    }
}
```

Зарегистрируйте `RegistrationMessageHandler` в вашем PSR-11 контейнере и подключите его через
`Server::onMessage()`, как описано в разделе **[Использование сервера](use-server.md)**.

Далее: **[Примеры](examples.md)**.
