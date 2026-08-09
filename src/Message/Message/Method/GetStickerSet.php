<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 *
 * Typical usage: instantiate the method with the required 'name' field and dispatch the request
 * directly.
 *
 * @see https://core.telegram.org/bots/api#getstickerset
 */
class GetStickerSet extends Method implements MethodInterface {
    /**
     * Creates a new GetStickerSet method and sets the required 'name' field.
     *
     * @param string $name Name of the sticker set
     */
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return 'getStickerSet';
    }
}
