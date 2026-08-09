<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up
 * to 200 stickers. Other sticker sets can have up to 120 stickers. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id', 'name', and 'sticker' fields
 * and dispatch the request directly.
 *
 * @link https://core.telegram.org/bots/api#addstickertoset
 */
class AddStickerToSet extends Method implements MethodInterface {
    /**
     * Creates a new AddStickerToSet method and sets the required 'user_id', 'name', and 'sticker'
     * fields.
     *
     * @param int $userId User identifier of sticker set owner
     * @param string $name Sticker set name
     * @param mixed $sticker A JSON-serialized object with information about the added sticker. If
     *   exactly the same sticker had already been added to the set, then the set isn't changed.
     */
    public function __construct(int $userId, string $name, mixed $sticker) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('name', $name);
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return 'addStickerToSet';
    }
}
