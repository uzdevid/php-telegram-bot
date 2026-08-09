# Using the Server

`UzDevid\Telegram\Bot\Server` implements `UzDevid\Telegram\Bot\ServerInterface` and dispatches
incoming Telegram updates (from a webhook or from `getUpdates`) to your handler classes.

The server needs a PSR-11 container (to resolve handler classes) and a `Yiisoft\Hydrator\Hydrator`
instance to hydrate raw update arrays into typed objects.

## Setup

```php
<?php

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

/** @var \Psr\Container\ContainerInterface $container */
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server->withPayload($payload);
```

## Handling Messages

Implement `UzDevid\Telegram\Bot\Handler\MessageHandlerInterface`:

```php
<?php

use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Update\MessageUpdate;

class StartMessageHandler implements MessageHandlerInterface {
    public function canHandle(MessageUpdate $update): bool {
        return $update->message->text === '/start';
    }

    public function handle(MessageUpdate $update): void {
        // Handle the /start command
    }
}
```

Register it with `onMessage()`:

```php
$server->withPayload($payload)->onMessage(StartMessageHandler::class);
```

`onMessage()` resolves the handler via the container, so make sure `StartMessageHandler` is
registered in your PSR-11 container.

### Filtering by Message Type

If a handler implements
`UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypeInterface` (single type) or
`UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypesInterface` (multiple types), the server
automatically skips it when the incoming message does not match the declared type(s) — before
`canHandle()` is even called.

## Handling Callback Queries

Implement `UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface`:

```php
<?php

use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;

class ActionCallbackHandler implements CallbackQueryHandlerInterface {
    public function canHandle(CallbackQueryUpdate $query): bool {
        return $query->data === 'action:click';
    }

    public function handle(CallbackQueryUpdate $query): void {
        // Handle the button click
    }
}
```

```php
$server->withPayload($payload)->onCallbackQuery(ActionCallbackHandler::class);
```

## Handling Inline Queries

Implement `UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface`:

```php
<?php

use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;

class SearchInlineQueryHandler implements InlineQueryHandlerInterface {
    public function canHandle(InlineQueryUpdate $update): bool {
        return true;
    }

    public function handle(InlineQueryUpdate $update): void {
        // Answer the inline query
    }
}
```

```php
$server->withPayload($payload)->onInlineQuery(SearchInlineQueryHandler::class);
```

## Handling Other Update Types (Requests)

Updates that aren't a message, callback query, or inline query (such as chat join requests or
pre-checkout queries) are handled via
`UzDevid\Telegram\Bot\Handler\Request\RequestInterface` implementations. The library ships two
ready-to-extend abstract base classes:

- `UzDevid\Telegram\Bot\Handler\Request\ChatJoinRequest`
- `UzDevid\Telegram\Bot\Handler\Request\PreCheckoutQuery`

```php
<?php

use UzDevid\Telegram\Bot\Handler\Request\ChatJoinRequest;

class ApproveJoinRequestHandler extends ChatJoinRequest {
    public function handle(): void {
        // $this->request is a UzDevid\Telegram\Bot\Update\ChatJoinRequestUpdate
    }
}
```

```php
$server->withPayload($payload)->onRequest(ApproveJoinRequestHandler::class);
```

## Chaining Handlers

All `on*()` methods return `ServerInterface`, and once one handler successfully handles an update
the server stops evaluating further handlers. This allows safe chaining:

```php
$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class)
    ->onMessage(HelpMessageHandler::class)
    ->onCallbackQuery(ActionCallbackHandler::class)
    ->onInlineQuery(SearchInlineQueryHandler::class)
    ->onRequest(ApproveJoinRequestHandler::class);
```

## Webhook Entry Point Example

```php
<?php
// webhook.php

require __DIR__ . '/vendor/autoload.php';

use UzDevid\Telegram\Bot\Server;
use Yiisoft\Hydrator\Hydrator;

$container = /* your PSR-11 container */;
$server = new Server($container, new Hydrator());

$payload = json_decode(file_get_contents('php://input'), true) ?? [];

$server
    ->withPayload($payload)
    ->onMessage(StartMessageHandler::class)
    ->onCallbackQuery(ActionCallbackHandler::class);
```

Next: **[API Methods](api-methods.md)** or **[Examples](examples.md)**.
