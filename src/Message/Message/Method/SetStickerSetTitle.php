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
    public function __construct(string $name, string $title) {
        parent::__construct();
        $this->addAttribute('name', $name);
        $this->addAttribute('title', $title);
    }

    public function methodName(): string {
        return "setStickerSetTitle";
    }


}
