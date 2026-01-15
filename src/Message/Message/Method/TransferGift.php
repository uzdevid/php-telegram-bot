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
     * @param int $starCount
     *
     * @return $this
     */
    public function starCount(int $starCount): static {
        $this->addAttribute('star_count', $starCount);
        return $this;
    }
}
