# Storing User State

`UzDevid\Telegram\Bot\State\StateStorageInterface` is a small, storage-agnostic contract for
persisting arbitrary state between updates — for example the current step of a
registration/onboarding scenario, temporary form data collected across several messages, or any
kind of finite-state-machine position tied to a user or chat.

The library itself does not dictate *where* this state lives. You implement the interface on top
of whatever storage fits your application — PHP sessions, Redis, Memcached, a database table, an
in-memory array for tests, etc. A ready-to-use session-based implementation is included out of the
box.

## The Interface

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

- **`set(string $key, mixed $value): void`** — stores a value under the given key.
- **`get(string $key, mixed $default = null): mixed`** — retrieves the value, or `$default` if not set.
- **`has(string $key): bool`** — checks whether a value exists for the key.
- **`delete(string $key): void`** — removes the value for the key.

There is no fixed key format — a common convention is to namespace keys with the user/chat id,
e.g. `"user:{$userId}:state"` or `"user:{$userId}:registration:step"`, so different users' state
doesn't collide.

## Built-in Implementation: PHP Sessions

`UzDevid\Telegram\Bot\State\SessionStateStorage` implements `StateStorageInterface` on top of
native PHP sessions (`$_SESSION`). It's a good fit for classic PHP web request/response setups
where a session is already available (e.g. a webhook handled inside a normal PHP web app with
session-based routing).

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

> For long-polling/CLI bots, or multi-server deployments, PHP sessions are usually not
> appropriate (they're tied to a single session cookie/request lifecycle). Implement
> `StateStorageInterface` on top of a shared store instead — see below.

## Custom Implementations

Because your handlers only depend on `StateStorageInterface`, you can swap in any backend without
changing your business logic. For example, a Redis-backed implementation:

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

The same pattern works for a database table, Memcached, an array cache, etc.

## Example: A Registration Scenario

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
            // store $update->message->contact/text as the phone number ...
            $this->state->set($key, 'awaiting_name');
            return;
        }

        if ($step === 'awaiting_name') {
            // store the name, registration complete
            $this->state->delete($key);
        }
    }
}
```

Register `RegistrationMessageHandler` in your PSR-11 container and dispatch it via
`Server::onMessage()` as described in **[Using the Server](use-server.md)**.

Next: **[Examples](examples.md)**.
