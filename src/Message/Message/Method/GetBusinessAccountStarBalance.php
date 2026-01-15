<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetBusinessAccountStarBalance
 *
 * Returns the amount of Telegram Stars owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns StarAmount on success.
 */
class GetBusinessAccountStarBalance extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "getBusinessAccountStarBalance";
    }


}
