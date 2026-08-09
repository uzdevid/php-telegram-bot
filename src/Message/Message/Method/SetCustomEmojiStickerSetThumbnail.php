<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'name' field, then chain optional builder
 * methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setcustomemojistickersetthumbnail
 */
class SetCustomEmojiStickerSetThumbnail extends Method implements MethodInterface {
    /**
     * Creates a new SetCustomEmojiStickerSetThumbnail method and sets the required 'name' field.
     *
     * @param string $name Sticker set name
     */
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return 'setCustomEmojiStickerSetThumbnail';
    }

    /**
     * Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the
     * thumbnail and use the first sticker as the thumbnail
     *
     * @param string $customEmojiId Custom emoji identifier of a sticker from the sticker set; pass
     *   an empty string to drop the thumbnail and use the first sticker as the thumbnail
     * @return $this
     */
    public function customEmojiId(string $customEmojiId): static {
        $this->addAttribute('custom_emoji_id', $customEmojiId);
        return $this;
    }
}
