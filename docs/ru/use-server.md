# Использование сервера

`UzDevid\Telegram\Bot\Server` реализует `UzDevid\Telegram\Bot\ServerInterface` и передаёт входящие
обновления Telegram (полученные через вебхук или `getUpdates`) вашим классам-обработчикам.

Серверу требуется PSR-11 контейнер (для разрешения классов-обработчиков) и экземпляр
`Yiisoft\Hydrator\Hydrator` для преобразования сырых массивов обновлений в типизированные объекты.

## Настройка

```php
<?php

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

/** @var \Psr\Container\ContainerInterface $container */
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server->withPayload($payload);
```

## Обработка сообщений

Реализуйте `UzDevid\Telegram\Bot\Handler\MessageHandlerInterface`:

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }

    public function handle(MessageUpdate $update): void {
        // Обработка команды /start
    }
}
```

Зарегистрируйте его через `onMessage()`:

```php
$server->withPayload($payload)->onMessage(StartMessageHandler::class);
```

`onMessage()` разрешает обработчик через контейнер, поэтому убедитесь, что `StartMessageHandler`
зарегистрирован в вашем PSR-11 контейнере.

### Фильтрация по типу сообщения

Если обработчик реализует
`UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypeInterface` (один тип) или
`UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypesInterface` (несколько типов), сервер
автоматически пропускает его, если входящее сообщение не соответствует объявленному типу(ам) — ещё
до вызова `canHandle()`.

## Обработка callback-запросов

Реализуйте `UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface`:

```php
<?php

use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;

class ActionCallbackHandler implements CallbackQueryHandlerInterface {
    public function canHandle(CallbackQueryUpdate $query): bool {
        return $query->data === 'action:click';
    }

    public function handle(CallbackQueryUpdate $query): void {
        // Обработка нажатия кнопки
    }
}
```

```php
$server->withPayload($payload)->onCallbackQuery(ActionCallbackHandler::class);
```

## Обработка встроенных запросов (inline query)

Реализуйте `UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface`:

```php
<?php

use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;

class SearchInlineQueryHandler implements InlineQueryHandlerInterface {
    public function canHandle(InlineQueryUpdate $update): bool {
        return true;
    }

    public function handle(InlineQueryUpdate $update): void {
        // Ответ на встроенный запрос
    }
}
```

```php
$server->withPayload($payload)->onInlineQuery(SearchInlineQueryHandler::class);
```

## Обработка остальных типов обновлений (Request)

Обновления, не являющиеся сообщением, callback-запросом или встроенным запросом (например, запросы
на вступление в чат или запросы предварительной проверки платежа), обрабатываются через реализации
`UzDevid\Telegram\Bot\Handler\Request\RequestInterface`. Библиотека предоставляет два готовых к
расширению абстрактных базовых класса:

- `UzDevid\Telegram\Bot\Handler\Request\ChatJoinRequest`
- `UzDevid\Telegram\Bot\Handler\Request\PreCheckoutQuery`

```php
<?php

use UzDevid\Telegram\Bot\Handler\Request\ChatJoinRequest;

class ApproveJoinRequestHandler extends ChatJoinRequest {
    public function handle(): void {
        // $this->request — объект UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate
    }
}
```

```php
$server->withPayload($payload)->onRequest(ApproveJoinRequestHandler::class);
```

## Цепочка обработчиков

Все методы `on*()` возвращают `ServerInterface`, и как только один обработчик успешно обработал
обновление, сервер прекращает проверку остальных обработчиков. Это позволяет безопасно строить
цепочки вызовов:

```php
$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class)
    ->onMessage(HelpMessageHandler::class)
    ->onCallbackQuery(ActionCallbackHandler::class)
    ->onInlineQuery(SearchInlineQueryHandler::class)
    ->onRequest(ApproveJoinRequestHandler::class);
```

## Пример точки входа вебхука

```php
<?php
// webhook.php

require __DIR__ . '/vendor/autoload.php';

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$container = /* ваш PSR-11 контейнер */;
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class)
    ->onCallbackQuery(ActionCallbackHandler::class);
```

Далее: **[Методы API](api-methods.md)** или **[Примеры](examples.md)**.
