<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\AcceptedGiftTypes;

/**
 * Method SetBusinessAccountGiftSettings
 *
 * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the can_change_gift_settings business bot right. Returns True on success.
 */
class SetBusinessAccountGiftSettings extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId, bool $showGiftButton, AcceptedGiftTypes $acceptedGiftTypes) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('show_gift_button', $showGiftButton);
        $this->addAttribute('accepted_gift_types', $acceptedGiftTypes);
    }

    public function methodName(): string {
        return "setBusinessAccountGiftSettings";
    }


}
