<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any
 * user. Requires no parameters. Returns an Array of Sticker objects.
 *
 * Typical usage: dispatch the request directly when the related Telegram Bot API action is needed.
 *
 * @link https://core.telegram.org/bots/api#getforumtopiciconstickers
 */
class GetForumTopicIconStickers extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getForumTopicIconStickers';
    }
}
