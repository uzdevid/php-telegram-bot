<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputSticker;

/**
 * Method ReplaceStickerInSet
 *
 * Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet. Returns True on success.
 */
class ReplaceStickerInSet extends Method implements MethodInterface {

    /**
     * @param int $userId User identifier of the sticker set owner
     * @param string $name Sticker set name
     * @param string $oldSticker File identifier of the replaced sticker
     * @param InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
     */
    public function __construct(int $userId, string $name, string $oldSticker, InputSticker $sticker) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('name', $name);
        $this->addAttribute('old_sticker', $oldSticker);
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return "replaceStickerInSet";
    }


}
