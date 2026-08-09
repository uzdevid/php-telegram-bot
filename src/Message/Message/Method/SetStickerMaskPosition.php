<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the mask position of a mask sticker. The sticker must belong to a
 * sticker set that was created by the bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'sticker' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#setstickermaskposition
 */
class SetStickerMaskPosition extends Method implements MethodInterface {
    /**
     * Creates a new SetStickerMaskPosition method and sets the required 'sticker' field.
     *
     * @param string $sticker File identifier of the sticker
     */
    public function __construct(string $sticker) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return 'setStickerMaskPosition';
    }

    /**
     * A JSON-serialized object with the position where the mask should be placed on faces. Omit the
     * parameter to remove the mask position.
     *
     * @param mixed $maskPosition A JSON-serialized object with the position where the mask should
     *   be placed on faces. Omit the parameter to remove the mask position.
     *
     * @return $this
     */
    public function maskPosition(mixed $maskPosition): static {
        $this->addAttribute('mask_position', $maskPosition);
        return $this;
    }
}
