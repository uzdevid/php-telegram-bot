<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PhotoSize
 *
 * @see https://core.telegram.org/bots/api#photosize
 *
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize extends Type {
    /**
     * Identifier for this file, which can be used to download or reuse the file
     */
    public string $fileId;
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be
     * used to download or reuse the file.
     */
    public string $fileUniqueId;
    /**
     * Photo width
     */
    public int $width;
    /**
     * Photo height
     */
    public int $height;
    /**
     * Optional. File size in bytes
     */
    public int $fileSize;
}
