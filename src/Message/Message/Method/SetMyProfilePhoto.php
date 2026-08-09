<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Changes the profile photo of the bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'photo' field and dispatch the request
 * directly.
 *
 * @link https://core.telegram.org/bots/api#setmyprofilephoto
 */
class SetMyProfilePhoto extends Method implements MethodInterface {
    /**
     * Creates a new SetMyProfilePhoto method and sets the required 'photo' field.
     *
     * @param mixed $photo The new profile photo to set
     */
    public function __construct(mixed $photo) {
        parent::__construct();
        $this->addAttribute('photo', $photo);
    }

    public function methodName(): string {
        return 'setMyProfilePhoto';
    }
}
