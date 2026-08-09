<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the token of a managed bot. Returns the token as String on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field and dispatch the request
 * directly.
 *
 * @see https://core.telegram.org/bots/api#getmanagedbottoken
 */
class GetManagedBotToken extends Method implements MethodInterface {
    /**
     * Creates a new GetManagedBotToken method and sets the required 'user_id' field.
     *
     * @param int $userId User identifier of the managed bot whose token will be returned
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'getManagedBotToken';
    }
}
