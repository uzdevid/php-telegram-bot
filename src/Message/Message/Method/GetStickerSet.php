<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetStickerSet
 *
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 */
class GetStickerSet extends Method implements MethodInterface {

    /**
     * @param string $name Name of the sticker set
     */
    public function __construct(string $name) {
        parent::__construct();

        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "getStickerSet";
    }


}
