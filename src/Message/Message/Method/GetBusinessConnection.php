<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetBusinessConnection
 *
 * Use this method to get information about the connection of the bot with a business account. Returns a BusinessConnection object on success.
 */
class GetBusinessConnection extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "getBusinessConnection";
    }


}
