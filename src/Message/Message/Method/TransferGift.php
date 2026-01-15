<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method TransferGift
 *
 * Transfers an owned unique gift to another user. Requires the can_transfer_and_upgrade_gifts business bot right. Requires can_transfer_stars business bot right if the transfer is paid. Returns True on success.
 */
class TransferGift extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param string $ownedGiftId Unique identifier of the regular gift that should be transferred
     * @param int $newOwnerChatId Unique identifier of the chat which will own the gift. The chat must be active in the last 24 hours.
     */
    public function __construct(string $businessConnectionId, string $ownedGiftId, int $newOwnerChatId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('owned_gift_id', $ownedGiftId);
        $this->addAttribute('new_owner_chat_id', $newOwnerChatId);
    }

    public function methodName(): string {
        return "transferGift";
    }

    /**
     * @param int $starCount The amount of Telegram Stars that will be paid for the transfer from the business account balance. If positive, then the can_transfer_stars business bot right is required.
     *
     * @return $this
     */
    public function starCount(int $starCount): static {
        $this->addAttribute('star_count', $starCount);
        return $this;
    }
}
