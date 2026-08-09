<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to delete a sticker set that was created by the bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'name' field and dispatch the request
 * directly.
 *
 * @link https://core.telegram.org/bots/api#deletestickerset
 */
class DeleteStickerSet extends Method implements MethodInterface {
    /**
     * Creates a new DeleteStickerSet method and sets the required 'name' field.
     *
     * @param string $name Sticker set name
     */
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return 'deleteStickerSet';
    }
}
