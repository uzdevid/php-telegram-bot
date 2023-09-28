PHP-da Telegram bot
===================

PHP-da oson hamda mukammal Telegram bot yaratish uchun kerakli kutubxona.

O'rnatish
---------

Ushbu kengaytmani o'rnatishning eng afzal usuli - [composer](http://getcomposer.org/) orqali.

O'rnatish uchun quyidagi buyruqni ishga tushiring:

```bash
composer require "uzdevid/php-telegram-bot"
```

Botning asosiy obyektini yaratish
---------------------------------

Bot sozlamalari

```php
$config = [
    'token' => '123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11', // Bot tokeni
];
```
> Bot tokenini [@BotFather](https://t.me/BotFather) dan olishingiz mumkin

> Agar bot doyimiy faqat bitta telegram akkaunt bilan ishlaydigan bo'lsa 
> chat_id yoki username parametrini ham kiritishingiz mumkin. 
> Shu holda habar yuborayotganda ushbu parametrlarni kiritishingiz shart bo'lmaydi

Bot obyektini yaratish

```php
$bot = new \uzdevid\telegram\bot\Bot($config);
```

Matnli habar yuborish
-----------------------

```php
use uzdevid\telegram\bot\message\messages\methods\SendMessage;

$bot->sender()
    ->chatId(123456789) // yoki ->username('@uzdevid')
    ->method(new SendMessage('Salom. Bu matnli habar'))
    ->send();
```

> __chatId()__ - habar yuboriladigan chat id sini qabul qabul qiladi.

> __sender()__ - so'rov yuborishga mo'ljallangan.

> __method()__ - yuboriladigan so'rovni qabul qabul qiladi.

> __send()__ - so'rovni yuboradi.

Rasmli habar yuborish
-----------------------

Rasmli habar yuborish ham huddi matnli habar yuborish kabi amalga oshiriladi. Faqatgi farqi rasmni yuborish uchun __method()__ metodiga __SendPhoto__ obyektini uzatish kerak.

```php
use uzdevid\telegram\bot\message\messages\methods\SendPhoto;

$sendPhoto = new SendPhoto('https://uzdevid.com/img/logo.png');
$sendPhoto->caption('Bu rasmli habar')->hasSpoiler();

$bot->sender()
    ->chatId(123456789)
    ->method($sendPhoto)
    ->send();
```

> __SendPhoto__ - rasmli habar yuborish uchun kerakli klass.

> __caption()__ - rasmli habar yuboriladigan matn.

> __hasSpoiler()__ - rasmni spoiler ko'rinishida yuborish.

Tugmali habar yuborish
-----------------------

```php
use uzdevid\telegram\bot\message\messages\methods\SendMessage;
use uzdevid\telegram\bot\message\messages\keyboard\reply\ReplyButton;
use uzdevid\telegram\bot\message\messages\keyboard\reply\ReplyKeyboardMarkup;
use uzdevid\telegram\bot\message\messages\keyboard\reply\ReplyRow;

$replyMarkup = new ReplyKeyboardMarkup();
$replyMarkup->resizeKeyboard()->addRow(
    (new ReplyRow())
        ->addButton(new ReplyButton('Tugma 1'))
        ->addButton((new ReplyButton('Joylashuv uchun tugma'))->requestLocation())
        ->addButton((new ReplyButton('Telefon raqam uchun tugma'))->requestContact())
);

$sendMessage = new SendMessage('Bu tugmali habar');
$sendMessage->addReplyMarkup($replyMarkup);

$bot->sender()
    ->chatId(123456789)
    ->method($sendMessage)
    ->send();
```

Tugmali habar yuborilganidan so'ng undan keyingi habardan tugmalarni 
o'chirish uchun yangi habarni shunday ko'rinishda yuborish kerak

```php
use uzdevid\telegram\bot\message\messages\methods\SendMessage;
use uzdevid\telegram\bot\message\messages\keyboard\reply\ReplyKeyboardRemove;

$sendMessage = new SendMessage('Bu oddiy habar');
$sendMessage->addReplyMarkup(new ReplyKeyboardRemove());
```

> __ReplyKeyboardMarkup__ - tugma yaratish uchun kerakli klass.

> __resizeKeyboard()__ - tugmalarni o'lchamini o'zgartirish mumkinligini yoqish.

> __addRow()__ - tugmalarga yangi qator yaratadi.

> __ReplyRow__ - tugmalar uchun yangi qator yaratish uchun kerakli klass.

> __addButton()__ - tugma qo'shish.

>__ReplyButton__ tugma yaratish uchun kerakli klass.

> __addReplyMarkup()__ - tugmalarni habarga biriktirib yuborish uchun kerakli metod.

Botdan habarlarni qabul qilish va qayta ishlash
-----------------------------------------------

index.php
```php
namespace App;

$requestBody = json_decode(file_get_contents('php://input'), true);

$bot->handler($requestBody)
    ->on(ChatStart::class)
```
> __$requestBody__ - telegramdan kelgan so'rov.

> __handler()__ - so'rovlarni qabul qiluvchi va qayta ishlovchi metod.

> __on()__ - qabul qilinadigan so'rovlarni qo'shish uchun kerakli metod.

ChatStart.php
```php
namespace App\Handlers;

use uzdevid\telegram\bot\handler\updates\MessageUpdate;
use uzdevid\telegram\bot\handler\MessageUpdateInterface;
use uzdevid\telegram\bot\objects\Message;

class ChatStart extends MessageUpdate implements MessageUpdateInterface {
    public static function canHandle(Bot $bot, Message $message): bool {
        return $message->text == '/start';
    }
    
    public function handle(Bot $bot, Message $message): void {
        $bot->sender()
            ->chatId($message->chat->id)
            ->method(new SendMessage('Salom. Botga xush kelibsiz'))
            ->send();
    }
}
```

> __canHandle()__ - so'rovni qabul qilinadimi yoki yo'qmi tekshiradi.

> __handle()__ - so'rovni qabul qilgandan so'ng ishlovchi metod.

