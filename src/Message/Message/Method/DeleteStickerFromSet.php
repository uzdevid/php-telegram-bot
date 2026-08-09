<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to delete a sticker from a set created by the bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'sticker' field and dispatch the request
 * directly.
 *
 * @see https://core.telegram.org/bots/api#deletestickerfromset
 */
class DeleteStickerFromSet extends Method implements MethodInterface {
    /**
     * Creates a new DeleteStickerFromSet method and sets the required 'sticker' field.
     *
     * @param string $sticker File identifier of the sticker
     */
    public function __construct(string $sticker) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return 'deleteStickerFromSet';
    }
}
