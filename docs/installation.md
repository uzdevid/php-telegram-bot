# Installation & Configuration

## English

### Requirements

- PHP >= 8.2
- Composer
- GuzzleHTTP 7.8+
- PSR Container implementation
- Yiisoft Hydrator 1.2.0+

### Installation

```bash
composer require "uzdevid/php-telegram-bot"
```

### Getting a Bot Token

1. Open Telegram and find [@BotFather](https://t.me/BotFather)
2. Send `/newbot` command
3. Follow the instructions to create your bot
4. Copy your bot token (looks like: `123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11`)

### Basic Setup

```php
<?php

use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

// Create configuration
$config = new ClientConfig('YOUR_BOT_TOKEN');

// Create HTTP client
$httpClient = new HttpClient();

// Create bot client
$bot = new Client($config, $httpClient);
```

### Setting Up Webhook

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$webhook = new SetWebhook('https://example.com/webhook.php');
$webhook->maxConnections(100);
$webhook->dropPendingUpdates(true);

$bot->withMethod($webhook)->send();
```

### Using getUpdates (Polling)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$getUpdates = new GetUpdates();
$getUpdates->offset($lastUpdateId);
$getUpdates->limit(100);
$getUpdates->timeout(30);

$updates = $bot->withMethod($getUpdates)->send();
```

---

## O'zbekcha

### Talablar

- PHP >= 8.2
- Composer
- GuzzleHTTP 7.8+
- PSR Container amalga oshirish
- Yiisoft Hydrator 1.2.0+

### O'rnatish

```bash
composer require "uzdevid/php-telegram-bot"
```

### Bot tokenini olish

1. Telegramni oching va [@BotFather](https://t.me/BotFather)ni topib oling
2. `/newbot` buyrugisini yuboring
3. Bot yaratish uchun ko'rsatmalarni bajaring
4. Bot tokeningizni nusxalab oling (o'xshaydi: `123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11`)

### Asosiy sozlash

```php
<?php

use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

// Konfiguratsiyani yaratish
$config = new ClientConfig('SIZNING_BOT_TOKENI');

// HTTP klientini yaratish
$httpClient = new HttpClient();

// Bot klientini yaratish
$bot = new Client($config, $httpClient);
```

### Webhook-ni sozlash

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$webhook = new SetWebhook('https://example.com/webhook.php');
$webhook->maxConnections(100);
$webhook->dropPendingUpdates(true);

$bot->withMethod($webhook)->send();
```

### getUpdates-dan foydalanish (Polling)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$getUpdates = new GetUpdates();
$getUpdates->offset($lastUpdateId);
$getUpdates->limit(100);
$getUpdates->timeout(30);

$updates = $bot->withMethod($getUpdates)->send();
```

---

## Русский

### Требования

- PHP >= 8.2
- Composer
- GuzzleHTTP 7.8+
- Реализация PSR Container
- Yiisoft Hydrator 1.2.0+

### Установка

```bash
composer require "uzdevid/php-telegram-bot"
```

### Получение токена бота

1. Откройте Telegram и найдите [@BotFather](https://t.me/BotFather)
2. Отправьте команду `/newbot`
3. Следуйте инструкциям для создания бота
4. Скопируйте ваш токен бота (выглядит как: `123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11`)

### Базовая настройка

```php
<?php

use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

// Создать конфигурацию
$config = new ClientConfig('ВАШ_ТОКЕН_БОТА');

// Создать HTTP клиент
$httpClient = new HttpClient();

// Создать клиент бота
$bot = new Client($config, $httpClient);
```

### Настройка вебхука

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$webhook = new SetWebhook('https://example.com/webhook.php');
$webhook->maxConnections(100);
$webhook->dropPendingUpdates(true);

$bot->withMethod($webhook)->send();
```

### Использование getUpdates (Polling)

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$getUpdates = new GetUpdates();
$getUpdates->offset($lastUpdateId);
$getUpdates->limit(100);
$getUpdates->timeout(30);

$updates = $bot->withMethod($getUpdates)->send();
```
