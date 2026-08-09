<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * A method to get the current Telegram Stars balance of the bot. Requires no parameters. On
 * success, returns a StarAmount object.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#getmystarbalance
 */
class GetMyStarBalance extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getMyStarBalance';
    }
}
