<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoNote
 *
 * @see https://core.telegram.org/bots/api#videonote
 *
 * This object represents a video message (https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of v.4.0).
 */
class VideoNote extends Type {
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
     * Video width and height (diameter of the video message) as defined by the sender
     */
    public int $length;
    /**
     * Duration of the video in seconds as defined by the sender
     */
    public int $duration;
    /**
     * Optional. Video thumbnail
     */
    public PhotoSize $thumbnail;
    /**
     * Optional. File size in bytes
     */
    public int $fileSize;
}
