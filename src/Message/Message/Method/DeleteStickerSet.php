<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteStickerSet
 *
 * Use this method to delete a sticker set that was created by the bot. Returns True on success.
 */
class DeleteStickerSet extends Method implements MethodInterface {
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "deleteStickerSet";
    }


}
