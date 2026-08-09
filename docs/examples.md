# Examples

## English

### Basic Bot Setup

```php
<?php

use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('YOUR_BOT_TOKEN');
$httpClient = new HttpClient();
$bot = new Client($config, $httpClient);
```

### Sending Messages

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Hello, World!');
$message->chatId(123456789);
$message->parseMode('HTML');
$message->disableWebPagePreview(true);

$bot->withMethod($message)->send();
```

### Sending Photos

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo->chatId(123456789);
$photo->caption('Beautiful photo');
$photo->parseMode('Markdown');

$bot->withMethod($photo)->send();
```

### Interactive Keyboards

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Dto\ReplyKeyboard;
use UzDevid\Telegram\Dto\KeyboardButton;

$button1 = new KeyboardButton('Option 1');
$button2 = new KeyboardButton('Option 2');

$keyboard = new ReplyKeyboard();
$keyboard->addRow([$button1, $button2]);

$message = new SendMessage('Choose an option');
$message->chatId(123456789);
$message->replyMarkup($keyboard);

$bot->withMethod($message)->send();
```

### Inline Keyboards

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Dto\InlineKeyboard;
use UzDevid\Telegram\Dto\InlineButton;

$button1 = new InlineButton('Visit', 'https://example.com');
$button2 = new InlineButton('Call Action', 'action_callback');

$keyboard = new InlineKeyboard();
$keyboard->addRow([$button1, $button2]);

$message = new SendMessage('Click a button');
$message->chatId(123456789);
$message->replyMarkup($keyboard);

$bot->withMethod($message)->send();
```

### Handling Webhook Updates

```php
<?php

use UzDevid\Telegram\Bot\Server;
use UzDevid\Telegram\Bot\Handler\MessageHandler;

class MyMessageHandler extends MessageHandler {
    public function handle(): void {
        $message = $this->getUpdate()->getMessage();
        $text = $message->getText();
        
        echo "Received: $text\n";
    }
}

$server = new Server();
$server->registerHandler('message', MyMessageHandler::class);
$server->onRequest();
```

### Polling Updates

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

while (true) {
    $getUpdates = new GetUpdates();
    $getUpdates->offset($offset);
    $getUpdates->timeout(30);
    
    $updates = $bot->withMethod($getUpdates)->send();
    
    foreach ($updates as $update) {
        // Process update
        $offset = $update->getUpdateId() + 1;
    }
}
```

---

## O'zbekcha

### Asosiy Bot Sozlamasi

```php
<?php

use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('SIZNING_BOT_TOKENI');
$httpClient = new HttpClient();
$bot = new Client($config, $httpClient);
```

### Xabar yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Salom, Dunyo!');
$message->chatId(123456789);
$message->parseMode('HTML');
$message->disableWebPagePreview(true);

$bot->withMethod($message)->send();
```

### Rasmlar yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo->chatId(123456789);
$photo->caption('Ajoyib rasm');
$photo->parseMode('Markdown');

$bot->withMethod($photo)->send();
```

### Interaktiv klaviaturalar

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Dto\ReplyKeyboard;
use UzDevid\Telegram\Dto\KeyboardButton;

$button1 = new KeyboardButton('Variant 1');
$button2 = new KeyboardButton('Variant 2');

$keyboard = new ReplyKeyboard();
$keyboard->addRow([$button1, $button2]);

$message = new SendMessage('Variantlardan birini tanlang');
$message->chatId(123456789);
$message->replyMarkup($keyboard);

$bot->withMethod($message)->send();
```

### Inline klaviaturalar

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Dto\InlineKeyboard;
use UzDevid\Telegram\Dto\InlineButton;

$button1 = new InlineButton('Ziyorat', 'https://example.com');
$button2 = new InlineButton('Harakat', 'action_callback');

$keyboard = new InlineKeyboard();
$keyboard->addRow([$button1, $button2]);

$message = new SendMessage('Tugmani bosing');
$message->chatId(123456789);
$message->replyMarkup($keyboard);

$bot->withMethod($message)->send();
```

### Webhook yangilanishlarini boshqarish

```php
<?php

use UzDevid\Telegram\Bot\Server;
use UzDevid\Telegram\Bot\Handler\MessageHandler;

class MyMessageHandler extends MessageHandler {
    public function handle(): void {
        $message = $this->getUpdate()->getMessage();
        $text = $message->getText();
        
        echo "Qabul qilindi: $text\n";
    }
}

$server = new Server();
$server->registerHandler('message', MyMessageHandler::class);
$server->onRequest();
```

### Yangilanishlarni polling qilish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

while (true) {
    $getUpdates = new GetUpdates();
    $getUpdates->offset($offset);
    $getUpdates->timeout(30);
    
    $updates = $bot->withMethod($getUpdates)->send();
    
    foreach ($updates as $update) {
        // Yangilanishni qayta ishlash
        $offset = $update->getUpdateId() + 1;
    }
}
```

---

## Русский

### Базовая настройка бота

```php
<?php

use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('ВАШ_ТОКЕН_БОТА');
$httpClient = new HttpClient();
$bot = new Client($config, $httpClient);
```

### Отправка сообщений

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Привет, Мир!');
$message->chatId(123456789);
$message->parseMode('HTML');
$message->disableWebPagePreview(true);

$bot->withMethod($message)->send();
```

### Отправка фото

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo->chatId(123456789);
$photo->caption('Красивое фото');
$photo->parseMode('Markdown');

$bot->withMethod($photo)->send();
```

### Интерактивные клавиатуры

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Dto\ReplyKeyboard;
use UzDevid\Telegram\Dto\KeyboardButton;

$button1 = new KeyboardButton('Вариант 1');
$button2 = new KeyboardButton('Вариант 2');

$keyboard = new ReplyKeyboard();
$keyboard->addRow([$button1, $button2]);

$message = new SendMessage('Выберите вариант');
$message->chatId(123456789);
$message->replyMarkup($keyboard);

$bot->withMethod($message)->send();
```

### Встроенные клавиатуры

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Dto\InlineKeyboard;
use UzDevid\Telegram\Dto\InlineButton;

$button1 = new InlineButton('Посетить', 'https://example.com');
$button2 = new InlineButton('Действие', 'action_callback');

$keyboard = new InlineKeyboard();
$keyboard->addRow([$button1, $button2]);

$message = new SendMessage('Нажмите кнопку');
$message->chatId(123456789);
$message->replyMarkup($keyboard);

$bot->withMethod($message)->send();
```

### Обработка входящих обновлений вебхука

```php
<?php

use UzDevid\Telegram\Bot\Server;
use UzDevid\Telegram\Bot\Handler\MessageHandler;

class MyMessageHandler extends MessageHandler {
    public function handle(): void {
        $message = $this->getUpdate()->getMessage();
        $text = $message->getText();
        
        echo "Получено: $text\n";
    }
}

$server = new Server();
$server->registerHandler('message', MyMessageHandler::class);
$server->onRequest();
```

### Опрос обновлений

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

while (true) {
    $getUpdates = new GetUpdates();
    $getUpdates->offset($offset);
    $getUpdates->timeout(30);
    
    $updates = $bot->withMethod($getUpdates)->send();
    
    foreach ($updates as $update) {
        // Обработать обновление
        $offset = $update->getUpdateId() + 1;
    }
}
```
