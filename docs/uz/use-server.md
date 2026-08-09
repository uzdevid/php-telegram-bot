# Serverdan foydalanish

`UzDevid\Telegram\Bot\Server` sinfi `UzDevid\Telegram\Bot\ServerInterface` interfeysini amalga
oshiradi va Telegramdan kelgan yangilanishlarni (webhook yoki `getUpdates` orqali) sizning handler
sinflaringizga yo'naltiradi.

Serverga handler sinflarini aniqlash uchun PSR-11 konteyneri va xom yangilanish massivlarini
turdagi obyektlarga aylantirish uchun `Yiisoft\Hydrator\Hydrator` obyekti kerak.

## Sozlash

```php
<?php

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

/** @var \Psr\Container\ContainerInterface $container */
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server->withPayload($payload);
```

## Xabarlarni boshqarish

`UzDevid\Telegram\Bot\Handler\MessageHandlerInterface` ni amalga oshiring:

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }

    public function handle(MessageUpdate $update): void {
        // /start buyrug'ini boshqarish
    }
}
```

Uni `onMessage()` bilan ro'yxatdan o'tkazing:

```php
$server->withPayload($payload)->onMessage(StartMessageHandler::class);
```

`onMessage()` handlerni konteyner orqali aniqlaydi, shuning uchun `StartMessageHandler` sizning
PSR-11 konteyneringizda ro'yxatdan o'tganligiga ishonch hosil qiling.

### Xabar turi bo'yicha filtrlash

Agar handler `UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypeInterface` (bitta tur) yoki
`UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypesInterface` (bir nechta tur) ni amalga
oshirsa, server kelgan xabar e'lon qilingan tur(lar)ga mos kelmasa, `canHandle()` chaqirilishidan
oldinoq uni avtomatik ravishda o'tkazib yuboradi.

## Callback so'rovlarini boshqarish

`UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface` ni amalga oshiring:

```php
<?php

use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;

class ActionCallbackHandler implements CallbackQueryHandlerInterface {
    public function canHandle(CallbackQueryUpdate $query): bool {
        return $query->data === 'action:click';
    }

    public function handle(CallbackQueryUpdate $query): void {
        // Tugma bosilishini boshqarish
    }
}
```

```php
$server->withPayload($payload)->onCallbackQuery(ActionCallbackHandler::class);
```

## Inline so'rovlarni boshqarish

`UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface` ni amalga oshiring:

```php
<?php

use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;

class SearchInlineQueryHandler implements InlineQueryHandlerInterface {
    public function canHandle(InlineQueryUpdate $update): bool {
        return true;
    }

    public function handle(InlineQueryUpdate $update): void {
        // Inline so'rovga javob berish
    }
}
```

```php
$server->withPayload($payload)->onInlineQuery(SearchInlineQueryHandler::class);
```

## Boshqa yangilanish turlarini boshqarish (Request)

Xabar, callback so'rov yoki inline so'rov bo'lmagan yangilanishlar (masalan, chatga qo'shilish
so'rovlari yoki to'lov oldidan tekshirish so'rovlari)
`UzDevid\Telegram\Bot\Handler\Request\RequestInterface` amalga oshiruvchilar orqali boshqariladi.
Kutubxona kengaytirish uchun tayyor ikkita abstrakt asosiy sinfni taqdim etadi:

- `UzDevid\Telegram\Bot\Handler\Request\ChatJoinRequest`
- `UzDevid\Telegram\Bot\Handler\Request\PreCheckoutQuery`

```php
<?php

use UzDevid\Telegram\Bot\Handler\Request\ChatJoinRequest;

class ApproveJoinRequestHandler extends ChatJoinRequest {
    public function handle(): void {
        // $this->request — UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate obyekti
    }
}
```

```php
$server->withPayload($payload)->onRequest(ApproveJoinRequestHandler::class);
```

## Handlerlarni zanjirlash

Barcha `on*()` usullari `ServerInterface` ni qaytaradi, va bitta handler yangilanishni muvaffaqiyatli
boshqarganidan so'ng server keyingi handlerlarni tekshirishni to'xtatadi. Bu xavfsiz zanjirlashga
imkon beradi:

```php
$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class)
    ->onMessage(HelpMessageHandler::class)
    ->onCallbackQuery(ActionCallbackHandler::class)
    ->onInlineQuery(SearchInlineQueryHandler::class)
    ->onRequest(ApproveJoinRequestHandler::class);
```

## Webhook kirish nuqtasi misoli

```php
<?php
// webhook.php

require __DIR__ . '/vendor/autoload.php';

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$container = /* sizning PSR-11 konteyneringiz */;
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class)
    ->onCallbackQuery(ActionCallbackHandler::class);
```

Keyingi qadam: **[API usullari](api-methods.md)** yoki **[Misollar](examples.md)**.
