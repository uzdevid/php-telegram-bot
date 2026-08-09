<?php

declare(strict_types=1);

namespace UzDevid\Telegram\Bot\State;

/**
 * Class SessionStateStorage
 *
 * A ready-to-use {@see StateStorageInterface} implementation backed by native PHP
 * sessions ($_SESSION). Suitable for simple, single-server setups (e.g. bots driven
 * from a classic PHP web request lifecycle where a session is already available).
 *
 * For long-polling/CLI bots, or for multi-server deployments, prefer implementing
 * {@see StateStorageInterface} on top of a shared store instead (Redis, Memcached,
 * a database table, etc.), since PHP sessions are tied to a single request/response
 * cycle and a session cookie.
 */
class SessionStateStorage implements StateStorageInterface {
    /**
     * @param string $prefix Prefix used for all keys stored in $_SESSION, to avoid
     *   colliding with other data the application keeps in the session.
     */
    public function __construct(
        private readonly string $prefix = 'telegram_bot_state.',
    ) {
        if (\PHP_SESSION_NONE === session_status()) {
            session_start();
        }
    }

    public function set(string $key, mixed $value): void {
        $_SESSION[$this->prefix . $key] = $value;
    }

    public function get(string $key, mixed $default = null): mixed {
        return $_SESSION[$this->prefix . $key] ?? $default;
    }

    public function has(string $key): bool {
        return \array_key_exists($this->prefix . $key, $_SESSION);
    }

    public function delete(string $key): void {
        unset($_SESSION[$this->prefix . $key]);
    }
}
