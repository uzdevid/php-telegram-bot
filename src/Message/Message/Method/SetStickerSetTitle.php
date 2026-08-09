<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set the title of a created sticker set. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'name' and 'title' fields and dispatch
 * the request directly.
 *
 * @link https://core.telegram.org/bots/api#setstickersettitle
 */
class SetStickerSetTitle extends Method implements MethodInterface {
    /**
     * Creates a new SetStickerSetTitle method and sets the required 'name' and 'title' fields.
     *
     * @param string $name Sticker set name
     * @param string $title Sticker set title, 1-64 characters
     */
    public function __construct(string $name, string $title) {
        parent::__construct();
        $this->addAttribute('name', $name);
        $this->addAttribute('title', $title);
    }

    public function methodName(): string {
        return 'setStickerSetTitle';
    }
}
