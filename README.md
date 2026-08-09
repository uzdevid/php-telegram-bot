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

## Documentation

Complete documentation is available in the `docs/` directory:

- **[📚 Documentation Index](docs/index.md)** - Start here for navigation and all guides
- **[Installation & Configuration](docs/installation.md)** - Setup and bot token configuration
- **[Using the Client](docs/use-client.md)** - Sending messages and making API calls
- **[Using the Server](docs/use-server.md)** - Handling incoming updates
- **[Examples](docs/examples.md)** - Real-world code examples
- **[API Methods](docs/api-methods.md)** - List of all 185+ available methods
- **[Static Analysis](docs/static-analysis.md)** - Code quality and linting tools
- **[Contributing](docs/contributing.md)** - How to contribute
- **[FAQ](docs/faq.md)** - Frequently asked questions

All documentation is available in English, Русский (Russian), and O'zbekcha (Uzbek).

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


