<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetCustomEmojiStickerSetThumbnail
 *
 * Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
 */
class SetCustomEmojiStickerSetThumbnail extends Method implements MethodInterface {
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "setCustomEmojiStickerSetThumbnail";
    }

    /**
     * @param string $customEmojiId
     *
     * @return $this
     */
    public function customEmojiId(string $customEmojiId): static {
        $this->addAttribute('custom_emoji_id', $customEmojiId);
        return $this;
    }
}
