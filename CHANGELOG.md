# Changelog

All notable changes to `uzdevid/php-telegram-bot` are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

Work toward `2.0.0` is in progress. This is a breaking release; see `UPGRADE.md`
(added later in the 2.0 cycle) for a migration guide.

## [1.0.0] - 2026-08-20

First tagged release. It captures the library as it stood before the 2.0
refactor and gives existing consumers a stable point to pin to.

### Added
- OOP wrapper over the Telegram Bot API: `Client` plus one class per Bot API
  method, and `Server` with handler interfaces for incoming updates.
- Keyboard builders, payload builders, and inline-answer result types.
- `MIT` `LICENSE`, `CHANGELOG.md`, and `.editorconfig`.

### Changed
- CI (`static-analysis` workflow) now runs on the `main` and `dev` branches
  across PHP 8.2, 8.3, and 8.4, using the project's own `vendor/bin` tooling.
- `composer.json` description is now in English, matching the README.

### Removed
- Dead `phpcs.json` (PHP_CodeSniffer reads `phpcs.xml`, not JSON; its
  `declare-strict-types` also contradicted `.php-cs-fixer.php`).

### Fixed
- Two `phpdoc_annotation_without_dot` violations that kept `composer lint` red
  (`ReactionTypeEmoji`, `SessionStateStorage`).

[Unreleased]: https://github.com/uzdevid/php-telegram-bot/compare/1.0.0...HEAD
[1.0.0]: https://github.com/uzdevid/php-telegram-bot/releases/tag/1.0.0
