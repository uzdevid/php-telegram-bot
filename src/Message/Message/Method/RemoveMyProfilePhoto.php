<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Removes the profile photo of the bot. Requires no parameters. Returns True on success.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#removemyprofilephoto
 */
class RemoveMyProfilePhoto extends Method implements MethodInterface {
    public function methodName(): string {
        return 'removeMyProfilePhoto';
    }
}
