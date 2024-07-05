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


    public string $fileId;
    public string $fileUniqueId;
    public int $width;
    public int $height;
    public int $fileSize;
}