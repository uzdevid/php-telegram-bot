<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method RemoveBusinessAccountProfilePhoto
 *
 * Removes the current profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
 */
class RemoveBusinessAccountProfilePhoto extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return "removeBusinessAccountProfilePhoto";
    }

    /**
     * @param bool $isPublic
     *
     * @return $this
     */
    public function isPublic(bool $isPublic): static {
        $this->addAttribute('is_public', $isPublic);
        return $this;
    }
}
