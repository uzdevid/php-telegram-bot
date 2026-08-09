# Using the Client

## English

The `Client` class is used to send messages and make requests to the Telegram Bot API.

### Creating a Client

```php
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('YOUR_BOT_TOKEN');
$httpClient = new HttpClient();
$client = new Client($config, $httpClient);
```

### Sending a Text Message

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Hello, World!');
$message->parseMode('HTML');
$message->disableNotification(true);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Sending a Photo

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/image.jpg');
$photo->caption('This is a photo');
$photo->parseMode('HTML');

$response = $client
    ->withChatId(123456789)
    ->withMethod($photo)
    ->send();
```

### Sending with Keyboard

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;

$keyboard = new ReplyKeyboardMarkup();
$keyboard->resizeKeyboard();
$keyboard->addRow(
    (new ReplyRow())
        ->addButton(new ReplyButton('Yes'))
        ->addButton(new ReplyButton('No'))
);

$message = new SendMessage('Do you agree?');
$message->addReplyMarkup($keyboard);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Editing a Message

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Updated text');

$response = $client
    ->withChatId(123456789)
    ->withMessageId(555)
    ->withMethod($edit)
    ->edit();
```

### Method Chaining

All builder methods support method chaining:

```php
$message = new SendMessage('Hello')
    ->parseMode('Markdown')
    ->disableNotification(true)
    ->protectContent(true);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

---

## O'zbekcha

`Client` sinfi Telegram Bot API-ga xabar yuborish va so'rovlar qilish uchun ishlatiladi.

### Klient yaratish

```php
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('SIZNING_BOT_TOKENI');
$httpClient = new HttpClient();
$client = new Client($config, $httpClient);
```

### Matnli xabar yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Salom, dunyo!');
$message->parseMode('HTML');
$message->disableNotification(true);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Rasm yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/image.jpg');
$photo->caption('Bu rasm');
$photo->parseMode('HTML');

$response = $client
    ->withChatId(123456789)
    ->withMethod($photo)
    ->send();
```

### Tugmali xabar yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;

$keyboard = new ReplyKeyboardMarkup();
$keyboard->resizeKeyboard();
$keyboard->addRow(
    (new ReplyRow())
        ->addButton(new ReplyButton('Ha'))
        ->addButton(new ReplyButton('Yo\'q'))
);

$message = new SendMessage('Rozisizmi?');
$message->addReplyMarkup($keyboard);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Xabarni tahrirlash

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Yangilangan matn');

$response = $client
    ->withChatId(123456789)
    ->withMessageId(555)
    ->withMethod($edit)
    ->edit();
```

### Usul zanjiri

Barcha builder usullari usul zanjirini qo'llab-quvvatlaydi:

```php
$message = new SendMessage('Salom')
    ->parseMode('Markdown')
    ->disableNotification(true)
    ->protectContent(true);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

---

## Русский

Класс `Client` используется для отправки сообщений и запросов к Telegram Bot API.

### Создание клиента

```php
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('ВАШ_ТОКЕН_БОТА');
$httpClient = new HttpClient();
$client = new Client($config, $httpClient);
```

### Отправка текстового сообщения

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Привет, мир!');
$message->parseMode('HTML');
$message->disableNotification(true);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Отправка фото

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/image.jpg');
$photo->caption('Это фото');
$photo->parseMode('HTML');

$response = $client
    ->withChatId(123456789)
    ->withMethod($photo)
    ->send();
```

### Отправка с клавиатурой

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;

$keyboard = new ReplyKeyboardMarkup();
$keyboard->resizeKeyboard();
$keyboard->addRow(
    (new ReplyRow())
        ->addButton(new ReplyButton('Да'))
        ->addButton(new ReplyButton('Нет'))
);

$message = new SendMessage('Вы согласны?');
$message->addReplyMarkup($keyboard);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Редактирование сообщения

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Обновленный текст');

$response = $client
    ->withChatId(123456789)
    ->withMessageId(555)
    ->withMethod($edit)
    ->edit();
```

### Цепочки вызовов методов

Все методы построения поддерживают цепочки вызовов:

```php
$message = new SendMessage('Привет')
    ->parseMode('Markdown')
    ->disableNotification(true)
    ->protectContent(true);

$response = $client
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```
