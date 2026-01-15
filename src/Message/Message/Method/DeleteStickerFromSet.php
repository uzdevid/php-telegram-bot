<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteStickerFromSet
 *
 * Use this method to delete a sticker from a set created by the bot. Returns True on success.
 */
class DeleteStickerFromSet extends Method implements MethodInterface {
    public function __construct(string $sticker) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return "deleteStickerFromSet";
    }


}
