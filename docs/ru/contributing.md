# Внесение вклада

Мы приветствуем вклад в проект! Этот документ описывает, как начать разработку.

## Настройка окружения разработки

```bash
git clone https://github.com/uzdevid/php-telegram-bot.git
cd php-telegram-bot
composer install
```

## Стандарты кода

- Следуйте стандарту кодирования PSR-12
- Используйте строгую типизацию (`declare(strict_types=1)`)
- Указывайте полные подсказки типов
- Пишите подробные комментарии PHPDoc, соответствующие официальным описаниям Telegram Bot API
- Длина строки не должна превышать 120 символов
- Все пространства имён находятся под `UzDevid\Telegram\Bot\*`

## Статический анализ

В проекте настроены PHP_CodeSniffer (PSR-12), PHPStan (уровень 8) и PHP-CS-Fixer:

```bash
composer static-analysis   # запустить все проверки
composer phpcs             # только PHP_CodeSniffer
composer phpstan           # только PHPStan
composer lint               # PHP-CS-Fixer dry-run
composer lint:fix           # применить исправления PHP-CS-Fixer
```

Запускайте `composer static-analysis` перед открытием pull request.

## Внесение изменений

1. Создайте новую ветку: `git checkout -b feature/my-feature`
2. Внесите изменения
3. Запустите `composer static-analysis` и исправьте проблемы (`composer lint:fix` может
   автоматически исправить форматирование)
4. Зафиксируйте изменения с понятным сообщением
5. Отправьте изменения и откройте Pull Request

## Добавление нового класса метода

При добавлении нового метода Telegram Bot API:

1. Создайте класс в `src/Message/Message/Method/`, пространство имён
   `UzDevid\Telegram\Bot\Message\Message\Method`.
2. Расширьте `UzDevid\Telegram\Bot\Message\Message\Method` и реализуйте
   `UzDevid\Telegram\Bot\Message\Message\MethodInterface`.
3. Добавьте PHPDoc-блок над классом с официальным описанием и
   `@link https://core.telegram.org/bots/api#methodname`.
4. Реализуйте `methodName(): string`, возвращающий имя метода Telegram в camelCase.
5. Принимайте обязательные параметры в конструкторе; добавьте методы-строители (возвращающие
   `static`) для необязательных параметров, каждый из которых документирован с официальным
   описанием параметра.
6. Запустите `composer lint:fix` для форматирования нового файла.
