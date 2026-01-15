<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputFile;

/**
 * Method SetStickerSetThumbnail
 *
 * Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns True on success.
 */
class SetStickerSetThumbnail extends Method implements MethodInterface {
    public function __construct(string $name, int $userId, string $format) {
        parent::__construct();
        $this->addAttribute('name', $name);
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('format', $format);
    }

    public function methodName(): string {
        return "setStickerSetThumbnail";
    }

    /**
     * @param InputFile | string $thumbnail
     *
     * @return $this
     */
    public function thumbnail(InputFile|string $thumbnail): static {
        $this->addAttribute('thumbnail', $thumbnail);
        return $this;
    }
}
