<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Video
 *
 * @link https://core.telegram.org/bots/api#video
 *
 * This object represents a video file.
 */
class Video extends Type {
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