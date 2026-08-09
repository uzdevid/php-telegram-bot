<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * A simple method for testing your bot's authentication token. Requires no parameters. Returns
 * basic information about the bot in form of a User object.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#getme
 */
class GetMe extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getMe';
    }
}
