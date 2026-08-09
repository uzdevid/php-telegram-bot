<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Returns the amount of Telegram Stars owned by a managed business account. Requires the
 * can_view_gifts_and_stars business bot right. Returns StarAmount on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' field and
 * dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#getbusinessaccountstarbalance
 */
class GetBusinessAccountStarBalance extends Method implements MethodInterface {
    /**
     * Creates a new GetBusinessAccountStarBalance method and sets the required
     * 'business_connection_id' field.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return 'getBusinessAccountStarBalance';
    }
}
