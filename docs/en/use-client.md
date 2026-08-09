# Using the Client

`UzDevid\Telegram\Bot\Client` implements `UzDevid\Telegram\Bot\ClientInterface` and is responsible
for sending any Telegram Bot API method and returning the decoded response.

## Setup

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('YOUR_BOT_TOKEN');
$bot = new Client($config, new HttpClient());
```

## Sending a Message

Every Telegram Bot API method is a class in
`UzDevid\Telegram\Bot\Message\Message\Method`, implementing
`UzDevid\Telegram\Bot\Message\Message\MethodInterface`. Method classes use the builder pattern:
required parameters are passed to the constructor, optional ones are set via chainable methods.

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Hello, World!');
$message
    ->chatId(123456789)
    ->parseMode('HTML')
    ->disableNotification(false);

$response = $bot->withMethod($message)->send();
```

`Client::send()` merges the `chat_id` set via `Client::withChatId()` (if any) with the method's own
payload and dispatches the request. Most method classes already expose a `chatId()` builder method,
so calling `withChatId()` on the client is optional.

## Editing a Message

Use `Client::edit()` together with `withChatId()` and `withMessageId()`:

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Updated text');

$bot
    ->withChatId(123456789)
    ->withMessageId(42)
    ->withMethod($edit)
    ->edit();
```

## Sending a Photo

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo
    ->chatId(123456789)
    ->caption('A beautiful photo')
    ->parseMode('Markdown');

$bot->withMethod($photo)->send();
```

## Inline Keyboards

Inline keyboards are built from
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup`,
`InlineRow`, and `InlineButton`:

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$visitButton = (new InlineButton())->text('Visit example.com')->url('https://example.com');
$actionButton = (new InlineButton())->text('Click me')->callbackData('action:click');

$row = (new InlineRow())
    ->addButton($visitButton)
    ->addButton($actionButton);

$keyboard = (new InlineKeyboardMarkup())->addRow($row);

$message = new SendMessage('Choose an option:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Reply Keyboards

Reply keyboards use
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup`, `ReplyRow`, and
`ReplyButton`:

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$contactButton = (new ReplyButton())->text('Share contact')->requestContact();

$row = (new ReplyRow())->addButton($contactButton);

$keyboard = (new ReplyKeyboardMarkup())
    ->addRow($row)
    ->resizeKeyboard()
    ->oneTimeKeyboard(true);

$message = new SendMessage('Please share your contact:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

To remove a reply keyboard, use
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardRemove`. To force a reply, use
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Force\ForceReply`. Both implement
`ReplyMarkupInterface` and can be passed to `addReplyMarkup()` the same way.

## Calling Any Other Method

Every method listed in **[API Methods](api-methods.md)** works the same way: create the class,
chain the builder methods you need, then call `$bot->withMethod($method)->send()`.

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetMe;

$me = $bot->withMethod(new GetMe())->send();
```

Next: **[Using the Server](use-server.md)**.
