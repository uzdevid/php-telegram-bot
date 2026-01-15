<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method CreateNewStickerSet
 *
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns True on success.
 */
class CreateNewStickerSet extends Method implements MethodInterface {

    /**
     * @param int $userId User identifier of created sticker set owner
     * @param string $name Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
     * @param string $title Sticker set title, 1-64 characters
     * @param array $stickers A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     */
    public function __construct(int $userId, string $name, string $title, array $stickers) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('name', $name);
        $this->addAttribute('title', $title);
        $this->addAttribute('stickers', $stickers);
    }

    public function methodName(): string {
        return "createNewStickerSet";
    }

    /**
     * @param string $stickerType Type of stickers in the set, pass “regular”, “mask”, or “custom_emoji”. By default, a regular sticker set is created.
     *
     * @return $this
     */
    public function stickerType(string $stickerType): static {
        $this->addAttribute('sticker_type', $stickerType);
        return $this;
    }

    /**
     * @param bool $needsRepainting Pass True if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
     *
     * @return $this
     */
    public function needsRepainting(bool $needsRepainting): static {
        $this->addAttribute('needs_repainting', $needsRepainting);
        return $this;
    }
}
