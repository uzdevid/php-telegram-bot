# Installation & Configuration

## Requirements

- PHP >= 8.2
- [Composer](https://getcomposer.org/)
- `guzzlehttp/guzzle` ^7.8
- A [PSR-11](https://www.php-fig.org/psr/psr-11/) container implementation (required by `Server`)
- `yiisoft/hydrator` ^1.2

## Installation

```bash
composer require uzdevid/php-telegram-bot
```

## Getting a Bot Token

1. Open Telegram and find [@BotFather](https://t.me/BotFather).
2. Send the `/newbot` command and follow the instructions.
3. Copy the bot token you receive (looks like `123456789:AAExampleTokenExampleTokenExampleTok`).

## Basic Client Setup

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('YOUR_BOT_TOKEN');
$httpClient = new HttpClient();

$bot = new Client($config, $httpClient);
```

`ClientConfig` accepts an optional second argument if you need to override the API endpoint
(defaults to `https://api.telegram.org/bot%s/%s`).

## Basic Server Setup

`UzDevid\Telegram\Bot\Server` requires a PSR-11 container (to resolve your handler classes) and a
`Yiisoft\Hydrator\Hydrator` instance:

```php
<?php

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

/** @var \Psr\Container\ContainerInterface $container */
$server = new Server($container, new Hydrator());
```

See **[Using the Server](use-server.md)** for full details on registering handlers and setting up a
webhook.

## Setting a Webhook

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$setWebhook = new SetWebhook('https://example.com/webhook.php');
$setWebhook
    ->maxConnections(40)
    ->dropPendingUpdates(true)
    ->secretToken('a-secret-known-only-to-you');

$bot->withMethod($setWebhook)->send();
```

## Polling Updates (getUpdates)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

$getUpdates = new GetUpdates();
$getUpdates->offset($offset)->limit(100)->timeout(30);

$updates = $bot->withMethod($getUpdates)->send();
```

Next: **[Using the Client](use-client.md)** or **[Using the Server](use-server.md)**.
