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
    public function __construct(string $businessConnectionId, string $ownedGiftId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('owned_gift_id', $ownedGiftId);
    }

    public function methodName(): string {
        return "upgradeGift";
    }

    /**
     * @param bool $keepOriginalDetails
     *
     * @return $this
     */
    public function keepOriginalDetails(bool $keepOriginalDetails): static {
        $this->addAttribute('keep_original_details', $keepOriginalDetails);
        return $this;
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
