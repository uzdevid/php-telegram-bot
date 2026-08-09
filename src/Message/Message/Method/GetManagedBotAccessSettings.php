<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the access settings of a managed bot. Returns a BotAccessSettings object
 * on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field and dispatch the request
 * directly.
 *
 * @see https://core.telegram.org/bots/api#getmanagedbotaccesssettings
 */
class GetManagedBotAccessSettings extends Method implements MethodInterface {
    /**
     * Creates a new GetManagedBotAccessSettings method and sets the required 'user_id' field.
     *
     * @param int $userId User identifier of the managed bot whose access settings will be returned
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'getManagedBotAccessSettings';
    }
}
