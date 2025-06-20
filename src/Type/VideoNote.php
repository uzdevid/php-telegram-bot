<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoNote
 *
 * @link https://core.telegram.org/bots/api#videonote
 *
 * This object represents a video message (https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of v.4.0).
 */
class VideoNote extends Type {
    public string $fileId;
    public string $fileUniqueId;
    public int $length;
    public int $duration;
    public PhotoSize $thumbnail;
    public int $fileSize;
}