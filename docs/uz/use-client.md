# Klientdan foydalanish

`UzDevid\Telegram\Bot\Client` sinfi `UzDevid\Telegram\Bot\ClientInterface` interfeysini amalga
oshiradi va istalgan Telegram Bot API usulini yuborish hamda dekodlangan javobni qaytarish uchun
javobgardir.

## Sozlash

```php
<?php

use GuzzleHttp\Client as HttpClient;
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;

$config = new ClientConfig('SIZNING_BOT_TOKENINGIZ');
$bot = new Client($config, new HttpClient());
```

## Xabar yuborish

Har bir Telegram Bot API usuli `UzDevid\Telegram\Bot\Message\Message\Method` nomlar
maydonidagi sinf bo'lib, `UzDevid\Telegram\Bot\Message\Message\MethodInterface` ni amalga
oshiradi. Usul sinflari quriluvchi (builder) namunasidan foydalanadi: majburiy parametrlar
konstruktorga, ixtiyoriylari esa zanjirlanadigan usullar orqali beriladi.

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$message = new SendMessage('Salom, Dunyo!');
$message
    ->chatId(123456789)
    ->parseMode('HTML')
    ->disableNotification(false);

$response = $bot->withMethod($message)->send();
```

`Client::send()` `Client::withChatId()` orqali o'rnatilgan `chat_id` ni (agar mavjud bo'lsa) usulning
o'z payload'i bilan birlashtiradi va so'rovni yuboradi. Ko'pgina usul sinflarida o'zining
`chatId()` quriluvchi usuli allaqachon mavjud, shuning uchun klientda `withChatId()` ni chaqirish
ixtiyoriydir.

## Xabarni tahrirlash

`Client::edit()` ni `withChatId()` va `withMessageId()` bilan birga ishlating:

```php
use UzDevid\Telegram\Bot\Message\Message\Method\EditMessageText;

$edit = new EditMessageText('Yangilangan matn');

$bot
    ->withChatId(123456789)
    ->withMessageId(42)
    ->withMethod($edit)
    ->edit();
```

## Rasm yuborish

```php
use UzDevid\Telegram\Bot\Message\Message\Method\SendPhoto;

$photo = new SendPhoto('https://example.com/photo.jpg');
$photo
    ->chatId(123456789)
    ->caption('Ajoyib rasm')
    ->parseMode('Markdown');

$bot->withMethod($photo)->send();
```

## Inline klaviaturalar

Inline klaviaturalar
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup`, `InlineRow` va
`InlineButton` sinflaridan tuziladi:

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline\InlineRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$visitButton = (new InlineButton())->text('example.com ga o\'tish')->url('https://example.com');
$actionButton = (new InlineButton())->text('Bosing')->callbackData('action:click');

$row = (new InlineRow())
    ->addButton($visitButton)
    ->addButton($actionButton);

$keyboard = (new InlineKeyboardMarkup())->addRow($row);

$message = new SendMessage('Variantlardan birini tanlang:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

## Oddiy klaviaturalar (Reply keyboard)

Oddiy klaviaturalar
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup`, `ReplyRow` va
`ReplyButton` sinflaridan foydalanadi:

```php
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyButton;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyRow;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;

$contactButton = (new ReplyButton())->text('Kontaktni ulashish')->requestContact();

$row = (new ReplyRow())->addButton($contactButton);

$keyboard = (new ReplyKeyboardMarkup())
    ->addRow($row)
    ->resizeKeyboard()
    ->oneTimeKeyboard(true);

$message = new SendMessage('Iltimos, kontaktingizni ulashing:');
$message->chatId(123456789)->addReplyMarkup($keyboard);

$bot->withMethod($message)->send();
```

Oddiy klaviaturani olib tashlash uchun
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply\ReplyKeyboardRemove` dan foydalaning.
Foydalanuvchidan javob talab qilish uchun
`UzDevid\Telegram\Bot\Message\Message\Keyboard\Force\ForceReply` dan foydalaning. Ikkalasi ham
`ReplyMarkupInterface` ni amalga oshiradi va xuddi shu tarzda `addReplyMarkup()` ga uzatilishi
mumkin.

## Boshqa istalgan usulni chaqirish

**[API usullari](api-methods.md)** sahifasida keltirilgan har bir usul xuddi shu tarzda ishlaydi:
sinfni yarating, kerakli quriluvchi usullarni zanjirlang, so'ng `$bot->withMethod($method)->send()`
ni chaqiring.

```php
use UzDevid\Telegram\Bot\Message\Message\Method\GetMe;

$me = $bot->withMethod(new GetMe())->send();
```

Keyingi qadam: **[Serverdan foydalanish](use-server.md)**.
