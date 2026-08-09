# Examples

## Basic Bot Setup

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('YOUR_BOT_TOKEN');
$bot = new Client($config, new HttpClient());
```

## Sending a Text Message

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Hello, World!');
$message->chatId(123456789)->parseMode('HTML');

$bot->withMethod($message)->send();
```

## Sending a Photo

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo->chatId(123456789)->caption('A beautiful photo');

$bot->withMethod($photo)->send();
```

## Inline Keyboard

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$row = (new InlineRow())
    ->addButton((new InlineButton())->text('Visit example.com')->url('https://example.com'))
    ->addButton((new InlineButton())->text('Click me')->callbackData('action:click'));

$keyboard = (new InlineKeyboardMarkup())->addRow($row);

$message = new SendMessage('Choose an option:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Reply Keyboard

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$row = (new ReplyRow())->addButton((new ReplyButton())->text('Share contact')->requestContact());

$keyboard = (new ReplyKeyboardMarkup())->addRow($row)->resizeKeyboard();

$message = new SendMessage('Please share your contact:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Editing a Message

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Updated text');

$bot->withChatId(123456789)->withMessageId(42)->withMethod($edit)->edit();
```

## Handling `/start` via Webhook

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }

    public function handle(MessageUpdate $update): void {
        // Reply to the user, save them to the database, etc.
    }
}
```

```php
<?php
// webhook.php

require __DIR__ . '/vendor/autoload.php';

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$container = /* your PSR-11 container */;
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server->withPayload($payload)->onMessage(StartMessageHandler::class);
```

## Polling for Updates

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetUpdates;

$offset = 0;

while (true) {
    $getUpdates = new GetUpdates();
    $getUpdates->offset($offset)->timeout(30);

    $updates = $bot->withMethod($getUpdates)->send();

    foreach ($updates as $update) {
        // Process $update here
        $offset = $update['update_id'] + 1;
    }
}
```

## Setting a Webhook

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SetWebhook;

$setWebhook = new SetWebhook('https://example.com/webhook.php');
$setWebhook->maxConnections(40)->dropPendingUpdates(true);

$bot->withMethod($setWebhook)->send();
```

## Answering a Callback Query

```php
use UzDevid\Telegram\Bot\Message\Message\Method\AnswerCallbackQuery;

$answer = new AnswerCallbackQuery($callbackQueryId);
$answer->text('Action completed!')->showAlert(false);

$bot->withMethod($answer)->send();
```
