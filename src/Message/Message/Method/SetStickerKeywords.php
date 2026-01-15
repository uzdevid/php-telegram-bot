<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetStickerKeywords
 *
 * Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
 */
class SetStickerKeywords extends Method implements MethodInterface {
    public function __construct(string $sticker) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return "setStickerKeywords";
    }

    /**
     * @param array $keywords
     *
     * @return $this
     */
    public function keywords(array $keywords): static {
        $this->addAttribute('keywords', $keywords);
        return $this;
    }
}
