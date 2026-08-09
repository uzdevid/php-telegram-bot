<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Converts a given regular gift to Telegram Stars. Requires the can_convert_gifts_to_stars business
 * bot right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and
 * 'owned_gift_id' fields and dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#convertgifttostars
 */
class ConvertGiftToStars extends Method implements MethodInterface {
    /**
     * Creates a new ConvertGiftToStars method and sets the required 'business_connection_id' and
     * 'owned_gift_id' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param string $ownedGiftId Unique identifier of the regular gift that should be converted to
     *   Telegram Stars
     */
    public function __construct(string $businessConnectionId, string $ownedGiftId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('owned_gift_id', $ownedGiftId);
    }

    public function methodName(): string {
        return 'convertGiftToStars';
    }
}
