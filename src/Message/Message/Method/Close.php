<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to close the bot instance before moving it from one local server to another. You
 * need to delete the webhook before calling this method to ensure that the bot isn't launched again
 * after server restart. The method will return error 429 in the first 10 minutes after the bot is
 * launched. Returns True on success. Requires no parameters.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#close
 */
class Close extends Method implements MethodInterface {
    public function methodName(): string {
        return 'close';
    }
}
