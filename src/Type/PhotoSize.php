<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PhotoSize
 *
 * @link https://core.telegram.org/bots/api#photosize
 *
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize extends Type {
    /**
     * @var string Identifier for this file, which can be used to download or reuse the file
     */
    public string $fileId;

    /**
     * @var string Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $fileUniqueId;

    /**
     * @var int Photo width
     */
    public int $width;

    /**
     * @var int Photo height
     */
    public int $height;

    /**
     * @var int|null Optional. File size in bytes
     */
    public int|null $fileSize;
}
