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

    /**
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param bool $showGiftButton Pass True, if a button for sending a gift to the user or by the business account must always be shown in the input field
     * @param AcceptedGiftTypes $acceptedGiftTypes Types of gifts accepted by the business account
     */
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
