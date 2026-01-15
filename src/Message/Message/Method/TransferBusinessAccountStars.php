<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method TransferBusinessAccountStars
 *
 * Transfers Telegram Stars from the business account balance to the bot's balance. Requires the can_transfer_stars business bot right. Returns True on success.
 */
class TransferBusinessAccountStars extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param int $starCount Number of Telegram Stars to transfer; 1-10000
     */
    public function __construct(string $businessConnectionId, int $starCount) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('star_count', $starCount);
    }

    public function methodName(): string {
        return "transferBusinessAccountStars";
    }


}
