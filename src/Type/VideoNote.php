<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoNote
 *
 * @link https://core.telegram.org/bots/api#videonote
 *
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
class VideoNote extends Type {
    /**
     * @var string Identifier for this file, which can be used to download or reuse the file
     */
    public string $fileId;

    /**
     * @var string Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $fileUniqueId;

    /**
     * @var int Video width and height (diameter of the video message) as defined by the sender
     */
    public int $length;

    /**
     * @var int Duration of the video in seconds as defined by the sender
     */
    public int $duration;

    /**
     * @var PhotoSize|null Optional. Video thumbnail
     */
    public PhotoSize|null $thumbnail;

    /**
     * @var int|null Optional. File size in bytes
     */
    public int|null $fileSize;
}
