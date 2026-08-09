<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no
 * parameters. Returns a Gifts object.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#getavailablegifts
 */
class GetAvailableGifts extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getAvailableGifts';
    }
}
