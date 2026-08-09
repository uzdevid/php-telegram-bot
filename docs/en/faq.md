# Frequently Asked Questions

**Q: How do I get started?**
A: Install via Composer and check the [Installation & Configuration](installation.md) guide.

**Q: How do I send a message?**
A: See [Using the Client](use-client.md) for detailed examples.

**Q: How do I handle incoming updates?**
A: See [Using the Server](use-server.md) for webhook and handler setup.

**Q: Which PHP version is required?**
A: PHP 8.2 or higher.

**Q: What is the root namespace of the library?**
A: Everything lives under `UzDevid\Telegram\Bot\*` — e.g. `UzDevid\Telegram\Bot\Client`,
`UzDevid\Telegram\Bot\Server`, `UzDevid\Telegram\Bot\Message\Message\Method\*`.

**Q: How do I run static analysis?**
A: Run `composer static-analysis` to run PHP_CodeSniffer, PHPStan, and PHP-CS-Fixer together. See
[Contributing](contributing.md) for individual commands.

**Q: Is there documentation for each method?**
A: Yes — every method class has a full PHPDoc block with the official Telegram description and a
`@link` to the official docs. See [API Methods](api-methods.md) for the full list.

**Q: How do I contribute?**
A: See [Contributing](contributing.md) for guidelines.
