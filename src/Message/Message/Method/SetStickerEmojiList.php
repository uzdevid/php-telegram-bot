<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetStickerEmojiList
 *
 * Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
 */
class SetStickerEmojiList extends Method implements MethodInterface {

    /**
     * @param string $sticker File identifier of the sticker
     * @param array $emojiList A JSON-serialized list of 1-20 emoji associated with the sticker
     */
    public function __construct(string $sticker, array $emojiList) {
        parent::__construct();

        $this->addAttribute('sticker', $sticker);
        $this->addAttribute('emoji_list', $emojiList);
    }

    public function methodName(): string {
        return "setStickerEmojiList";
    }


}
