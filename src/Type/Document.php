<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Document
 *
 * @link https://core.telegram.org/bots/api#document
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document extends Type {
    /**
     * @var string Identifier for this file, which can be used to download or reuse the file
     */
    public string $fileId;

    /**
     * @var string Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $fileUniqueId;

    /**
     * @var PhotoSize|null Optional. Document thumbnail as defined by the sender
     */
    public PhotoSize|null $thumbnail;

    /**
     * @var string|null Optional. Original filename as defined by the sender
     */
    public string|null $fileName;

    /**
     * @var string|null Optional. MIME type of the file as defined by the sender
     */
    public string|null $mimeType;

    /**
     * @var int|null Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public int|null $fileSize;
}
