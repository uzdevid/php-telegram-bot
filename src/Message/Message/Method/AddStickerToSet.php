<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputSticker;

/**
 * Method AddStickerToSet
 *
 * Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns True on success.
 */
class AddStickerToSet extends Method implements MethodInterface {

    /**
     * @param int $userId User identifier of sticker set owner
     * @param string $name Sticker set name
     * @param InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
     */
    public function __construct(int $userId, string $name, InputSticker $sticker) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('name', $name);
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return "addStickerToSet";
    }


}
