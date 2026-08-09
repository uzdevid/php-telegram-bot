# Hissa qo'shish

Biz hissa qo'shishdan mamnunmiz! Bu hujjatda rivojlantirishni qanday boshlash tavsiflangan.

## Rivojlantirishni sozlash

```bash
git clone https://github.com/uzdevid/php-telegram-bot.git
cd php-telegram-bot
composer install
```

## Kod standartlari

- PSR-12 kodlash standartiga amal qiling
- Qat'iy turlardan foydalaning (`declare(strict_types=1)`)
- To'liq tur ko'rsatkichlarini bering
- Rasmi Telegram Bot API tavsiflariga mos keladigan keng qamrovli PHPDoc izohlarini yozing
- Qator uzunligini <= 120 belgi bilan saqlang
- Barcha nomlar maydonlari `UzDevid\Telegram\Bot\*` ostida joylashadi

## Statik tahlil

Loyihada PHP_CodeSniffer (PSR-12), PHPStan (8-daraja) va PHP-CS-Fixer o'rnatilgan:

```bash
composer static-analysis   # barcha tekshiruvlarni ishga tushirish
composer phpcs             # faqat PHP_CodeSniffer
composer phpstan           # faqat PHPStan
composer lint               # PHP-CS-Fixer dry-run
composer lint:fix           # PHP-CS-Fixer tuzatishlarni qo'llash
```

Pull request ochishdan oldin `composer static-analysis` ni ishga tushiring.

## O'zgarishlarni qilish

1. Yangi shoxni yarating: `git checkout -b feature/my-feature`
2. O'zgarishlarni qiling
3. `composer static-analysis` ni ishga tushiring va muammolarni tuzating
   (`composer lint:fix` formatlashni avtomatik tuzatishi mumkin)
4. Aniq xabar bilan commit qiling
5. Push qiling va Pull Request oching

## Yangi usul sinfini qo'shish

Yangi Telegram Bot API usulini qo'shishda:

1. Sinfni `src/Message/Message/Method/` da,
   `UzDevid\Telegram\Bot\Message\Message\Method` nomlar maydonida yarating.
2. `UzDevid\Telegram\Bot\Message\Message\Method` sinfini kengaytiring va
   `UzDevid\Telegram\Bot\Message\Message\MethodInterface` ni amalga oshiring.
3. Sinf ustiga rasmi tavsif va `@link https://core.telegram.org/bots/api#methodname` bilan PHPDoc
   blokini qo'shing.
4. Telegram usulining camelCase nomini qaytaradigan `methodName(): string` ni amalga oshiring.
5. Majburiy parametrlarni konstruktorda qabul qiling; ixtiyoriy parametrlar uchun (har biri rasmi
   parametr tavsifi bilan hujjatlangan, `static` qaytaradigan) quriluvchi usullar qo'shing.
6. Yangi faylni formatlash uchun `composer lint:fix` ni ishga tushiring.
