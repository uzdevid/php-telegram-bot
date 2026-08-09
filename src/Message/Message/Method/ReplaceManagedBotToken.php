<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to revoke the current token of a managed bot and generate a new one. Returns the
 * new token as String on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field and dispatch the request
 * directly.
 *
 * @see https://core.telegram.org/bots/api#replacemanagedbottoken
 */
class ReplaceManagedBotToken extends Method implements MethodInterface {
    /**
     * Creates a new ReplaceManagedBotToken method and sets the required 'user_id' field.
     *
     * @param int $userId User identifier of the managed bot whose token will be replaced
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'replaceManagedBotToken';
    }
}
