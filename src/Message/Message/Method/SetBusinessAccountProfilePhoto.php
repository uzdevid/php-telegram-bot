<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputProfilePhoto;

/**
 * Method SetBusinessAccountProfilePhoto
 *
 * Changes the profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
 */
class SetBusinessAccountProfilePhoto extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId, InputProfilePhoto $photo) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('photo', $photo);
    }

    public function methodName(): string {
        return "setBusinessAccountProfilePhoto";
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
