# Установка и настройка

## Требования

- PHP >= 8.2
- [Composer](https://getcomposer.org/)
- `guzzlehttp/guzzle` ^7.8
- Реализация [PSR-11](https://www.php-fig.org/psr/psr-11/) контейнера (нужна для `Server`)
- `yiisoft/hydrator` ^1.2

## Установка

```bash
composer require uzdevid/php-telegram-bot
```

## Получение токена бота

1. Откройте Telegram и найдите [@BotFather](https://t.me/BotFather).
2. Отправьте команду `/newbot` и следуйте инструкциям.
3. Скопируйте полученный токен бота (выглядит примерно так:
   `123456789:AAExampleTokenExampleTokenExampleTok`).

## Базовая настройка клиента

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('ВАШ_ТОКЕН_БОТА');
$httpClient = new HttpClient();

$bot = new Client($config, $httpClient);
```

`ClientConfig` принимает необязательный второй аргумент, если нужно переопределить адрес API
(по умолчанию `https://api.telegram.org/bot%s/%s`).

## Базовая настройка сервера

`UzDevid\Telegram\Bot\Server` требует PSR-11 контейнер (для разрешения ваших классов-обработчиков)
и экземпляр `Yiisoft\Hydrator\Hydrator`:

```php
<?php

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

/** @var \Psr\Container\ContainerInterface $container */
$server = new Server($container, new Hydrator());
```

Подробности о регистрации обработчиков и настройке вебхука см. в разделе
**[Использование сервера](use-server.md)**.

## Настройка вебхука

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$setWebhook = new SetWebhook('https://example.com/webhook.php');
$setWebhook
    ->maxConnections(40)
    ->dropPendingUpdates(true)
    ->secretToken('секрет-известный-только-вам');

$bot->withMethod($setWebhook)->send();
```

## Опрос обновлений (getUpdates)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

$getUpdates = new GetUpdates();
$getUpdates->offset($offset)->limit(100)->timeout(30);

$updates = $bot->withMethod($getUpdates)->send();
```

Далее: **[Использование клиента](use-client.md)** или **[Использование сервера](use-server.md)**.
