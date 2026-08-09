# Contributing

## English

We welcome contributions! This document describes how to get started with development.

### Development Setup

```bash
# Clone the repository
git clone https://github.com/uzdevid/php-telegram-bot.git
cd php-telegram-bot

# Install dependencies
composer install

# Run static analysis
composer static-analysis
```

### Code Standards

- Follow PSR-12 coding standard
- Use strict types (`declare(strict_types=1)`)
- Provide full type hints
- Write comprehensive PHPDoc comments
- Keep line length <= 120 characters

### Making Changes

1. Create a new branch: `git checkout -b feature/my-feature`
2. Make your changes
3. Run static analysis: `composer static-analysis`
4. Fix any issues: `composer lint:fix`
5. Commit with clear messages
6. Push and create a Pull Request

### Running Tests

```bash
# Check code style
composer lint

# Run PHP_CodeSniffer
composer phpcs

# Run PHPStan
composer phpstan

# Run all checks
composer static-analysis
```

### Adding New Methods

When adding new Telegram Bot API methods:

1. Create new class in `src/Message/Message/Method/`
2. Extend `Method` class and implement `MethodInterface`
3. Add comprehensive PHPDoc with official description
4. Include link to official docs: `@link https://core.telegram.org/bots/api#methodname`
5. Implement `methodName()` returning snake_case method name
6. Add builder methods for optional parameters
7. Run `composer lint:fix` to format

Example:

```php
/**
 * Use this method to send text messages. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendmessage
 */
class SendMessage extends Method implements MethodInterface {
    /**
     * Creates a new SendMessage method.
     *
     * @param string $text Text of the message to be sent
     */
    public function __construct(string $text) {
        parent::__construct();
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return 'sendMessage';
    }

    /**
     * Mode for parsing entities in the message text.
     *
     * @param string $parseMode Parse mode
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }
}
```

---

## O'zbekcha

Biz hissa qo'shishdan xush kelibmiz! Bu hujjat rivojlantirish bilan boshlashni tavsiflab beradi.

### Rivojlantirishni sozlash

```bash
# Repository-ni nusxalab oling
git clone https://github.com/uzdevid/php-telegram-bot.git
cd php-telegram-bot

# Bog'liqliklarni o'rnatish
composer install

# Statik tahlilni ishga tushirish
composer static-analysis
```

### Kod standartlari

- PSR-12 kodlash standartini bajaring
- Qat'iy turlardan foydalaning (`declare(strict_types=1)`)
- To'liq tur maslahatlarini bering
- Keng qamrovli PHPDoc izohlarni yozing
- Qator uzunligini <= 120 belgi bilan saqlang

### O'zgarishlarni qilish

1. Yangi shoxni yarating: `git checkout -b feature/my-feature`
2. O'zgarishlarni qiling
3. Statik tahlilni ishga tushiring: `composer static-analysis`
4. Muammolarni tuzating: `composer lint:fix`
5. Aniq xabarlar bilan commit qiling
6. Push qiling va Pull Request yarating

### Testlarni ishga tushirish

```bash
# Kod uslubini tekshiring
composer lint

# PHP_CodeSniffer-ni ishga tushiring
composer phpcs

# PHPStan-ni ishga tushiring
composer phpstan

# Barcha tekshiruvlarni ishga tushiring
composer static-analysis
```

### Yangi usullar qo'shish

Yangi Telegram Bot API usullarini qo'shishda:

1. `src/Message/Message/Method/` da yangi sinf yarating
2. `Method` sinfini kengaytiring va `MethodInterface`-ni amalga oshiring
3. Rasmi tavsif bilan keng PHPDoc qo'shing
4. Rasmi hujjatlarga havola qo'shing: `@link https://core.telegram.org/bots/api#methodname`
5. `methodName()` -ni snake_case usul nomi qaytarish uchun amalga oshiring
6. Ixtiyoriy parametrlar uchun quriluvchi usullarni qo'shing
7. Format qilish uchun `composer lint:fix` ishga tushiring

---

## Русский

Мы приветствуем вклады! Этот документ описывает, как начать разработку.

### Настройка разработки

```bash
# Клонировать репозиторий
git clone https://github.com/uzdevid/php-telegram-bot.git
cd php-telegram-bot

# Установить зависимости
composer install

# Запустить статический анализ
composer static-analysis
```

### Стандарты кода

- Следуйте стандарту PSR-12
- Используйте строгие типы (`declare(strict_types=1)`)
- Предоставляйте полные подсказки типов
- Пишите подробные комментарии PHPDoc
- Держите длину строк <= 120 символов

### Внесение изменений

1. Создайте новую ветку: `git checkout -b feature/my-feature`
2. Внесите изменения
3. Запустите статический анализ: `composer static-analysis`
4. Исправьте проблемы: `composer lint:fix`
5. Зафиксируйте с четкими сообщениями
6. Отправьте и создайте Pull Request

### Запуск тестов

```bash
# Проверить стиль кода
composer lint

# Запустить PHP_CodeSniffer
composer phpcs

# Запустить PHPStan
composer phpstan

# Запустить все проверки
composer static-analysis
```

### Добавление новых методов

При добавлении новых методов Telegram Bot API:

1. Создайте новый класс в `src/Message/Message/Method/`
2. Расширьте класс `Method` и реализуйте `MethodInterface`
3. Добавьте подробный PHPDoc с официальным описанием
4. Включите ссылку на официальную документацию: `@link https://core.telegram.org/bots/api#methodname`
5. Реализуйте `methodName()` возвращающий имя метода в snake_case
6. Добавьте методы построения для необязательных параметров
7. Запустите `composer lint:fix` для форматирования
