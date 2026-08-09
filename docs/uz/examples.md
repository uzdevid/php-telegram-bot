# Misollar

## Asosiy bot sozlamasi

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('SIZNING_BOT_TOKENINGIZ');
$bot = new Client($config, new HttpClient());
```

## Matnli xabar yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Salom, Dunyo!');
$message->chatId(123456789)->parseMode('HTML');

$bot->withMethod($message)->send();
```

## Rasm yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo->chatId(123456789)->caption('Ajoyib rasm');

$bot->withMethod($photo)->send();
```

## Inline klaviatura

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$row = (new InlineRow())
    ->addButton((new InlineButton())->text('example.com ga o\'tish')->url('https://example.com'))
    ->addButton((new InlineButton())->text('Bosing')->callbackData('action:click'));

$keyboard = (new InlineKeyboardMarkup())->addRow($row);

$message = new SendMessage('Variantlardan birini tanlang:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Oddiy klaviatura (Reply keyboard)

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$row = (new ReplyRow())->addButton((new ReplyButton())->text('Kontaktni ulashish')->requestContact());

$keyboard = (new ReplyKeyboardMarkup())->addRow($row)->resizeKeyboard();

$message = new SendMessage('Iltimos, kontaktingizni ulashing:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Xabarni tahrirlash

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Yangilangan matn');

$bot->withChatId(123456789)->withMessageId(42)->withMethod($edit)->edit();
```

## Webhook orqali `/start` ni boshqarish

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }

    public function handle(MessageUpdate $update): void {
        // Foydalanuvchiga javob berish, ma'lumotlar bazasiga saqlash va h.k.
    }
}
```

```php
<?php
// webhook.php

require __DIR__ . '/vendor/autoload.php';

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$container = /* sizning PSR-11 konteyneringiz */;
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server->withPayload($payload)->onMessage(StartMessageHandler::class);
```

## Yangilanishlarni polling qilish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

while (true) {
    $getUpdates = new GetUpdates();
    $getUpdates->offset($offset)->timeout(30);

    $updates = $bot->withMethod($getUpdates)->send();

    foreach ($updates as $update) {
        // Bu yerda $update ni qayta ishlang
        $offset = $update['update_id'] + 1;
    }
}
```

## Webhookni sozlash

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$setWebhook = new SetWebhook('https://example.com/webhook.php');
$setWebhook->maxConnections(40)->dropPendingUpdates(true);

$bot->withMethod($setWebhook)->send();
```

## Callback so'rovga javob berish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\AnswerCallbackQuery;

$answer = new AnswerCallbackQuery($callbackQueryId);
$answer->text('Amal bajarildi!')->showAlert(false);

$bot->withMethod($answer)->send();
```
