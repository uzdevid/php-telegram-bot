<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method UpgradeGift
 *
 * Upgrades a given regular gift to a unique gift. Requires the can_transfer_and_upgrade_gifts business bot right. Additionally requires the can_transfer_stars business bot right if the upgrade is paid. Returns True on success.
 */
class UpgradeGift extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param string $ownedGiftId Unique identifier of the regular gift that should be upgraded to a unique one
     */
    public function __construct(string $businessConnectionId, string $ownedGiftId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('owned_gift_id', $ownedGiftId);
    }

    public function methodName(): string {
        return "upgradeGift";
    }

    /**
     * @param bool $keepOriginalDetails Pass True to keep the original gift text, sender and receiver in the upgraded gift
     *
     * @return $this
     */
    public function keepOriginalDetails(bool $keepOriginalDetails): static {
        $this->addAttribute('keep_original_details', $keepOriginalDetails);
        return $this;
    }

    /**
     * @param int $starCount The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If gift.prepaid_upgrade_star_count > 0, then pass 0, otherwise, the can_transfer_stars business bot right is required and gift.upgrade_star_count must be passed.
     *
     * @return $this
     */
    public function starCount(int $starCount): static {
        $this->addAttribute('star_count', $starCount);
        return $this;
    }
}
