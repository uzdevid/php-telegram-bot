<?php

declare(strict_types=1);

namespace UzDevid\Telegram\Bot\State;

/**
 * Interface StateStorageInterface
 *
 * A storage-agnostic contract for persisting arbitrary user state between updates
 * (e.g. the current step of a registration/onboarding scenario, temporary form data,
 * a FSM state machine position, etc).
 *
 * The library only depends on this interface — consumers are free to implement it on
 * top of whatever storage fits their application: PHP sessions, Redis/Memcached, a SQL
 * or NoSQL database, an in-memory array (useful for tests), etc. A ready-to-use
 * {@see SessionStateStorage} implementation backed by PHP sessions is included.
 *
 * Implementations are expected to be keyed by an arbitrary string chosen by the caller.
 * For per-user state, a common convention is to namespace the key with the user/chat
 * identifier, e.g. `"user:{$userId}:state"` or `"user:{$userId}:registration:step"`.
 */
interface StateStorageInterface {
    /**
     * Stores a value under the given key, overwriting any previously stored value.
     *
     * @param string $key
     * @param mixed $value
     */
    public function set(string $key, mixed $value): void;

    /**
     * Retrieves the value stored under the given key, or `$default` if it doesn't exist.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Checks whether a value is stored under the given key.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Removes the value stored under the given key, if any.
     *
     * @param string $key
     */
    public function delete(string $key): void;
}
