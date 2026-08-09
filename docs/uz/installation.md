# O'rnatish va sozlash

## Talablar

- PHP >= 8.2
- [Composer](https://getcomposer.org/)
- `guzzlehttp/guzzle` ^7.8
- [PSR-11](https://www.php-fig.org/psr/psr-11/) konteyner implementatsiyasi (`Server` uchun kerak)
- `yiisoft/hydrator` ^1.2

## O'rnatish

```bash
composer require uzdevid/php-telegram-bot
```

## Bot tokenini olish

1. Telegramni oching va [@BotFather](https://t.me/BotFather) ni toping.
2. `/newbot` buyrug'ini yuboring va ko'rsatmalarga amal qiling.
3. Olingan bot tokenini nusxalab oling (masalan: `123456789:AAExampleTokenExampleTokenExampleTok`).

## Klientning asosiy sozlamasi

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('SIZNING_BOT_TOKENINGIZ');
$httpClient = new HttpClient();

$bot = new Client($config, $httpClient);
```

`ClientConfig` API manzilini o'zgartirish uchun ixtiyoriy ikkinchi argumentni qabul qiladi
(standart qiymati `https://api.telegram.org/bot%s/%s`).

## Serverning asosiy sozlamasi

`UzDevid\Telegram\Bot\Server` sinfingizni aniqlash uchun PSR-11 konteynerini va
`Yiisoft\Hydrator\Hydrator` obyektini talab qiladi:

```php
<?php

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

/** @var \Psr\Container\ContainerInterface $container */
$server = new Server($container, new Hydrator());
```

Handlerlarni ro'yxatdan o'tkazish va webhookni sozlash haqida to'liq ma'lumot uchun
**[Serverdan foydalanish](use-server.md)** sahifasiga qarang.

## Webhookni sozlash

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$setWebhook = new SetWebhook('https://example.com/webhook.php');
$setWebhook
    ->maxConnections(40)
    ->dropPendingUpdates(true)
    ->secretToken('faqat-sizga-malum-bolgan-maxfiy-token');

$bot->withMethod($setWebhook)->send();
```

## Yangilanishlarni polling qilish (getUpdates)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

$getUpdates = new GetUpdates();
$getUpdates->offset($offset)->limit(100)->timeout(30);

$updates = $bot->withMethod($getUpdates)->send();
```

Keyingi qadam: **[Klientdan foydalanish](use-client.md)** yoki **[Serverdan foydalanish](use-server.md)**.
