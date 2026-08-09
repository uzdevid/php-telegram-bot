# Foydalanuvchi holatini saqlash

`UzDevid\Telegram\Bot\State\StateStorageInterface` — saqlash usuliga bog'liq bo'lmagan, yangilanishlar
orasida ixtiyoriy holatni saqlash uchun kichik interfeys: masalan, ro'yxatdan o'tish/onboarding
stsenariysining joriy bosqichi, bir nechta xabar davomida yig'ilgan vaqtinchalik forma
ma'lumotlari yoki foydalanuvchi/chatga bog'langan chekli avtomat (FSM) holati.

Kutubxonaning o'zi bu holat *qayerda* saqlanishini belgilamaydi. Siz interfeysni ilovangizga mos
har qanday saqlash vositasi ustida amalga oshirasiz — PHP sessiyalari, Redis, Memcached,
ma'lumotlar bazasidagi jadval, testlar uchun massiv va h.k. Sessiyaga asoslangan tayyor amalga
oshirish paket tarkibiga kiritilgan.

## Interfeys

```php
<?php

namespace UzDevid\Telegram\Bot\State;

interface StateStorageInterface {
    public function set(string $key, mixed $value): void;

    public function get(string $key, mixed $default = null): mixed;

    public function has(string $key): bool;

    public function delete(string $key): void;
}
```

- **`set(string $key, mixed $value): void`** — qiymatni kalit bo'yicha saqlaydi.
- **`get(string $key, mixed $default = null): mixed`** — qiymatni qaytaradi, agar o'rnatilmagan bo'lsa `$default` qaytadi.
- **`has(string $key): bool`** — kalit bo'yicha qiymat mavjudligini tekshiradi.
- **`delete(string $key): void`** — kalit bo'yicha qiymatni o'chiradi.

Kalitning qat'iy formati yo'q — odatiy yondashuv kalitga foydalanuvchi/chat identifikatorini
qo'shish, masalan `"user:{$userId}:state"` yoki `"user:{$userId}:registration:step"`, shunda
turli foydalanuvchilarning holati bir-biriga aralashmaydi.

## Tayyor amalga oshirish: PHP sessiyalari

`UzDevid\Telegram\Bot\State\SessionStateStorage` `StateStorageInterface`ni native PHP
sessiyalari (`$_SESSION`) ustida amalga oshiradi. Sessiya allaqachon mavjud bo'lgan klassik PHP
veb-ilovalar uchun yaxshi mos keladi (masalan, sessiyaga asoslangan marshrutlash bilan oddiy
veb-ilova ichida ishlaydigan webhook).

```php
<?php

use UzDevid\Telegram\Bot\State\SessionStateStorage;

$state = new SessionStateStorage();

$state->set('user:123:registration:step', 'awaiting_phone');

if ($state->has('user:123:registration:step')) {
    $step = $state->get('user:123:registration:step');
}

$state->delete('user:123:registration:step');
```

> Long-polling/CLI botlar uchun, shuningdek bir nechta serverga joylashtirishda PHP sessiyalari
> odatda mos kelmaydi (ular bitta sessiya cookie/so'rov tsikliga bog'langan). Bunday holda
> `StateStorageInterface`ni umumiy saqlash vositasi ustida amalga oshiring — quyida ko'ring.

## Maxsus amalga oshirishlar

Handlerlaringiz faqat `StateStorageInterface`ga bog'liq bo'lgani uchun, biznes-logikangizni
o'zgartirmasdan istalgan backendni ulashingiz mumkin. Masalan, Redisga asoslangan amalga
oshirish:

```php
<?php

use UzDevid\Telegram\Bot\State\StateStorageInterface;

class RedisStateStorage implements StateStorageInterface {
    public function __construct(private readonly \Redis $redis) {
    }

    public function set(string $key, mixed $value): void {
        $this->redis->set($key, serialize($value));
    }

    public function get(string $key, mixed $default = null): mixed {
        $value = $this->redis->get($key);
        return $value === false ? $default : unserialize($value);
    }

    public function has(string $key): bool {
        return (bool)$this->redis->exists($key);
    }

    public function delete(string $key): void {
        $this->redis->del($key);
    }
}
```

Xuddi shu sxema ma'lumotlar bazasidagi jadval, Memcached, massivdagi kesh va h.k. uchun ham
mos keladi.

## Misol: ro'yxatdan o'tish stsenariysi

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\State\StateStorageInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class RegistrationMessageHandler implements MessageHandlerInterface {
    public function __construct(private readonly StateStorageInterface $state) {
    }

    public function canHandle(MessageUpdate $update): bool {
        $key = "user:{$update->message->from->id}:registration:step";
        return $this->state->has($key);
    }

    public function handle(MessageUpdate $update): void {
        $userId = $update->message->from->id;
        $key = "user:{$userId}:registration:step";

        $step = $this->state->get($key);

        if ($step === 'awaiting_phone') {
            // $update->message->contact/text dan telefon raqamini saqlaymiz ...
            $this->state->set($key, 'awaiting_name');
            return;
        }

        if ($step === 'awaiting_name') {
            // ismni saqlaymiz, ro'yxatdan o'tish yakunlandi
            $this->state->delete($key);
        }
    }
}
```

`RegistrationMessageHandler`ni PSR-11 konteyneringizda ro'yxatdan o'tkazing va uni
**[Serverdan foydalanish](use-server.md)** bo'limida tasvirlanganidek `Server::onMessage()`
orqali ulang.

Keyingi: **[Misollar](examples.md)**.
