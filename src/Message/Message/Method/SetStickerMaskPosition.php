<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\MaskPosition;

/**
 * Method SetStickerMaskPosition
 *
 * Use this method to change the mask position of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns True on success.
 */
class SetStickerMaskPosition extends Method implements MethodInterface {

    /**
     * @param string $sticker File identifier of the sticker
     */
    public function __construct(string $sticker) {
        parent::__construct();

        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return "setStickerMaskPosition";
    }

    /**
     * @param MaskPosition $maskPosition A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
     *
     * @return $this
     */
    public function maskPosition(MaskPosition $maskPosition): static {
        $this->addAttribute('mask_position', $maskPosition);
        return $this;
    }
}
