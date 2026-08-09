# Contributing

We welcome contributions! This document describes how to get started with development.

## Development Setup

```bash
git clone https://github.com/uzdevid/php-telegram-bot.git
cd php-telegram-bot
composer install
```

## Code Standards

- Follow the PSR-12 coding standard
- Use strict types (`declare(strict_types=1)`)
- Provide full type hints
- Write comprehensive PHPDoc comments matching the official Telegram Bot API descriptions
- Keep line length <= 120 characters
- All namespaces live under `UzDevid\Telegram\Bot\*`

## Static Analysis

The project ships with PHP_CodeSniffer (PSR-12), PHPStan (level 8), and PHP-CS-Fixer:

```bash
composer static-analysis   # run all checks
composer phpcs             # PHP_CodeSniffer only
composer phpstan           # PHPStan only
composer lint               # PHP-CS-Fixer dry-run
composer lint:fix           # PHP-CS-Fixer apply fixes
```

Run `composer static-analysis` before opening a pull request.

## Making Changes

1. Create a new branch: `git checkout -b feature/my-feature`
2. Make your changes
3. Run `composer static-analysis` and fix any issues (`composer lint:fix` can auto-fix formatting)
4. Commit with a clear message
5. Push and open a Pull Request

## Adding a New Method Class

When adding a new Telegram Bot API method:

1. Create the class in `src/Message/Message/Method/`, namespace
   `UzDevid\Telegram\Bot\Message\Message\Method`.
2. Extend `UzDevid\Telegram\Bot\Message\Message\Method` and implement
   `UzDevid\Telegram\Bot\Message\Message\MethodInterface`.
3. Add a PHPDoc block on the class with the official description and
   `@link https://core.telegram.org/bots/api#methodname`.
4. Implement `methodName(): string` returning the camelCase Telegram method name.
5. Accept required parameters in the constructor; add builder methods (returning `static`) for
   optional parameters, each documented with the official parameter description.
6. Run `composer lint:fix` to format the new file.

Example:

```php
<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send text messages. On success, the sent Message is returned.
 *
 * @link https://core.telegram.org/bots/api#sendmessage
 */
class SendMessage extends Method implements MethodInterface {
    /**
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     */
    public function __construct(string $text) {
        parent::__construct();
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return 'sendMessage';
    }

    /**
     * Unique identifier for the target chat or username of the target channel
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target channel
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
```
