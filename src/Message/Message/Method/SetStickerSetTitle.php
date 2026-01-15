<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetStickerSetTitle
 *
 * Use this method to set the title of a created sticker set. Returns True on success.
 */
class SetStickerSetTitle extends Method implements MethodInterface {

    /**
     * @param string $name Sticker set name
     * @param string $title Sticker set title, 1-64 characters
     */
    public function __construct(string $name, string $title) {
        parent::__construct();

        $this->addAttribute('name', $name);
        $this->addAttribute('title', $title);
    }

    public function methodName(): string {
        return "setStickerSetTitle";
    }


}
