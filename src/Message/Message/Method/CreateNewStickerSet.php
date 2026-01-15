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
     * @param string $stickerType
     *
     * @return $this
     */
    public function stickerType(string $stickerType): static {
        $this->addAttribute('sticker_type', $stickerType);
        return $this;
    }

    /**
     * @param bool $needsRepainting
     *
     * @return $this
     */
    public function needsRepainting(bool $needsRepainting): static {
        $this->addAttribute('needs_repainting', $needsRepainting);
        return $this;
    }
}
