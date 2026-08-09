<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns
 * True on success.
 *
 * Typical usage: instantiate the method with the required 'sticker' and 'position' fields and
 * dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#setstickerpositioninset
 */
class SetStickerPositionInSet extends Method implements MethodInterface {
    /**
     * Creates a new SetStickerPositionInSet method and sets the required 'sticker' and 'position'
     * fields.
     *
     * @param string $sticker File identifier of the sticker
     * @param int $position New sticker position in the set, zero-based
     */
    public function __construct(string $sticker, int $position) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
        $this->addAttribute('position', $position);
    }

    public function methodName(): string {
        return 'setStickerPositionInSet';
    }
}
