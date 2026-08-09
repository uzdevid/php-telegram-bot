<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change search keywords assigned to a regular or custom emoji sticker. The
 * sticker must belong to a sticker set created by the bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'sticker' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setstickerkeywords
 */
class SetStickerKeywords extends Method implements MethodInterface {
    /**
     * Creates a new SetStickerKeywords method and sets the required 'sticker' field.
     *
     * @param string $sticker File identifier of the sticker
     */
    public function __construct(string $sticker) {
        parent::__construct();
        $this->addAttribute('sticker', $sticker);
    }

    public function methodName(): string {
        return 'setStickerKeywords';
    }

    /**
     * A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64
     * characters
     *
     * @param array $keywords A JSON-serialized list of 0-20 search keywords for the sticker with
     *   total length of up to 64 characters
     * @return $this
     */
    public function keywords(array $keywords): static {
        $this->addAttribute('keywords', $keywords);
        return $this;
    }

    /**
     * Adds one item to the keywords list. A JSON-serialized list of 0-20 search keywords for the
     * sticker with total length of up to 64 characters
     *
     * @param string $keyword Adds one item to the keywords list. A JSON-serialized list of 0-20
     *   search keywords for the sticker with total length of up to 64 characters
     * @return $this
     */
    public function addKeyword(string $keyword): static {
        $this->pushAttribute('keywords', $keyword);
        return $this;
    }
}
