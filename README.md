PHP Telegram Bot
================

A comprehensive PHP library for building Telegram bots with complete Telegram Bot API support.

## Features

- ✨ **Complete API Coverage**: All 185+ Telegram Bot API methods
- 📝 **Comprehensive Documentation**: Full PHPDoc for every method
- 🏗️ **Builder Pattern**: Fluent interface for method chaining
- 🔍 **Static Analysis**: Integrated linting (PHP_CodeSniffer, PHPStan, PHP-CS-Fixer)
- ⚡ **Type-Safe**: Strict types and full type hints
- 🎯 **PSR-12 Compliant**: Follows PHP Standards Recommendations

## Installation

```bash
composer require "uzdevid/php-telegram-bot"
```

## Quick Start

### Sending a Message

```php
use UzDevid\Telegram\Bot\Client;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use UzDevid\Telegram\Bot\Message\Message\Method\SendMessage;
use GuzzleHttp\Client as HttpClient;

$config = new ClientConfig('YOUR_BOT_TOKEN');
$httpClient = new HttpClient();
$bot = new Client($config, $httpClient);

$message = new SendMessage('Hello, World!');
$message->parseMode('HTML');

$response = $bot
    ->withChatId(123456789)
    ->withMethod($message)
    ->send();
```

### Handling Updates

```php
use UzDevid\Telegram\Bot\Server;
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;
use Yiisoft\Hydrator\Hydrator;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }
    
    public function handle(MessageUpdate $update): void {
        // Handle the message
    }
}

$server = new Server($container, new Hydrator());
$payload = json_decode(file_get_contents('php://input'), true);

$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class);
```

### Storing User State

`UzDevid\Telegram\Bot\State\StateStorageInterface` lets you persist per-user state (e.g. a
registration flow step) behind a pluggable interface — implement it on top of a session, cache,
database, etc. A ready-to-use `SessionStateStorage` implementation is included.

```php
use UzDevid\Telegram\Bot\State\SessionStateStorage;

$state = new SessionStateStorage();
$state->set('user:123:registration:step', 'awaiting_phone');

if ($state->has('user:123:registration:step')) {
    $step = $state->get('user:123:registration:step');
}

$state->delete('user:123:registration:step');
```

See **[Storing User State](docs/en/use-state.md)** for details and custom implementation examples.

## Documentation

Complete documentation is available in the `docs/` directory, organized by language:

- **[English](docs/en/index.md)** (default)
- **[Русский](docs/ru/index.md)**
- **[O'zbekcha](docs/uz/index.md)**

Each language folder contains:

- **Installation & Configuration** - Setup and bot token configuration
- **Using the Client** - Sending messages and making API calls
- **Using the Server** - Handling incoming updates
- **API Methods** - List of all 185+ available methods
- **Examples** - Real-world code examples
- **Contributing** - How to contribute
- **FAQ** - Frequently asked questions

## Code Quality

```bash
# Run all static analysis checks
composer static-analysis

# Individual checks
composer phpcs      # PHP_CodeSniffer
composer phpstan   # PHPStan type checker
composer lint      # PHP-CS-Fixer dry-run
composer lint:fix  # PHP-CS-Fixer apply fixes
```

## License

MIT License - See LICENSE file for details

## Author

Ibragimov Diyorbek (uzdevid@gmail.com)


