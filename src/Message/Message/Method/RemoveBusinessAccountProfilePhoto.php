<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Removes the current profile photo of a managed business account. Requires the
 * can_edit_profile_photo business bot right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' field, then
 * chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#removebusinessaccountprofilephoto
 */
class RemoveBusinessAccountProfilePhoto extends Method implements MethodInterface {
    /**
     * Creates a new RemoveBusinessAccountProfilePhoto method and sets the required
     * 'business_connection_id' field.
     *
     * @param string $businessConnectionId Unique identifier of the business connection
     */
    public function __construct(string $businessConnectionId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
    }

    public function methodName(): string {
        return 'removeBusinessAccountProfilePhoto';
    }

    /**
     * Pass True to remove the public photo, which is visible even if the main photo is hidden by
     * the business account's privacy settings. After the main photo is removed, the previous
     * profile photo (if present) becomes the main photo.
     *
     * @param bool $isPublic Pass True to remove the public photo, which is visible even if the main
     *   photo is hidden by the business account's privacy settings. After the main photo is
     *   removed, the previous profile photo (if present) becomes the main photo.
     *
     * @return $this
     */
    public function isPublic(bool $isPublic = true): static {
        $this->addAttribute('is_public', $isPublic);
        return $this;
    }
}
