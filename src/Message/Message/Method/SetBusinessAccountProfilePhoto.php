<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Changes the profile photo of a managed business account. Requires the can_edit_profile_photo
 * business bot right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and 'photo'
 * fields, then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setbusinessaccountprofilephoto
 */
class SetBusinessAccountProfilePhoto extends Method implements MethodInterface {
    /**
     * Creates a new SetBusinessAccountProfilePhoto method and sets the required
     * 'business_connection_id' and 'photo' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     * @param mixed $photo The new profile photo to set
     */
    public function __construct(string $businessConnectionId, mixed $photo) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('photo', $photo);
    }

    public function methodName(): string {
        return 'setBusinessAccountProfilePhoto';
    }

    /**
     * Pass True to set the public photo, which will be visible even if the main photo is hidden by
     * the business account's privacy settings. An account can have only one public photo.
     *
     * @param bool $isPublic Pass True to set the public photo, which will be visible even if the
     *   main photo is hidden by the business account's privacy settings. An account can have only
     *   one public photo.
     * @return $this
     */
    public function isPublic(bool $isPublic = true): static {
        $this->addAttribute('is_public', $isPublic);
        return $this;
    }
}
