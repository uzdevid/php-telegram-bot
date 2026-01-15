<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StickerSet
 *
 * @link https://core.telegram.org/bots/api#stickerset
 *
 * This object represents a sticker set.
 */
class StickerSet extends Type {
    /**
     * @var string Sticker set name
     */
    public string $name;

    /**
     * @var string Sticker set title
     */
    public string $title;

    /**
     * @var string Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     */
    public string $stickerType;

    /**
     * @var Sticker[] List of all set stickers
     */
    public array $stickers;

    /**
     * @var PhotoSize|null Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public PhotoSize|null $thumbnail;
}
