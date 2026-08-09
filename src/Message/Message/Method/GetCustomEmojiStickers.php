<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get information about custom emoji stickers by their identifiers. Returns an
 * Array of Sticker objects.
 *
 * Typical usage: instantiate the method with the required 'custom_emoji_ids' field and dispatch the
 * request directly.
 *
 * @see https://core.telegram.org/bots/api#getcustomemojistickers
 */
class GetCustomEmojiStickers extends Method implements MethodInterface {
    /**
     * Creates a new GetCustomEmojiStickers method and sets the required 'custom_emoji_ids' field.
     *
     * @param array $customEmojiIds A JSON-serialized list of custom emoji identifiers. At most 200
     *   custom emoji identifiers can be specified.
     */
    public function __construct(array $customEmojiIds) {
        parent::__construct();
        $this->addAttribute('custom_emoji_ids', $customEmojiIds);
    }

    public function methodName(): string {
        return 'getCustomEmojiStickers';
    }
}
