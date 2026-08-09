<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get current webhook status. Requires no parameters. On success, returns a
 * WebhookInfo object. If the bot is using getUpdates , will return an object with the url field
 * empty.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#getwebhookinfo
 */
class GetWebhookInfo extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getWebhookInfo';
    }
}
