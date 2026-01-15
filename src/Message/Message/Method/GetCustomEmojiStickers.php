<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetCustomEmojiStickers
 *
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
 */
class GetCustomEmojiStickers extends Method implements MethodInterface {
    public function __construct(array $customEmojiIds) {
        parent::__construct();
        $this->addAttribute('custom_emoji_ids', $customEmojiIds);
    }

    public function methodName(): string {
        return "getCustomEmojiStickers";
    }


}
