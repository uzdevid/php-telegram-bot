<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Animation
 *
 * @link https://core.telegram.org/bots/api#animation
 *
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 */
class Animation extends Type {
    public string $fileId;
    public string $fileUniqueId;
    public int $width;
    public int $height;
    public int $duration;
    public PhotoSize $thumbnail;
    public string $fileName;
    public string $mimeType;
    public int $fileSize;
}