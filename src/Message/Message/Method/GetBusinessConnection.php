<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get information about the connection of the bot with a business account.
 * Returns a BusinessConnection object on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' field and
 * dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#getbusinessconnection
 */
class GetBusinessConnection extends Method implements MethodInterface {
    /**
     * Creates a new GetBusinessConnection method and sets the required 'business_connection_id'
     * field.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return 'getBusinessConnection';
    }
}
