<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetStickerPositionInSet
 *
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
 */
class SetStickerPositionInSet extends Method implements MethodInterface {
    public function __construct(string $sticker, int $position) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
        $this->addAttribute('position', $position);
    }

    public function methodName(): string {
        return "setStickerPositionInSet";
    }


}
