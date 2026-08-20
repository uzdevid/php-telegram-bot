<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Document
 *
 * @see https://core.telegram.org/bots/api#document
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document extends Type {
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
     * Optional. Document thumbnail as defined by the sender
     */
    public PhotoSize $thumbnail;
    /**
     * Optional. Original filename as defined by the sender
     */
    public string $fileName;
    /**
     * Optional. MIME type of the file as defined by the sender
     */
    public string $mimeType;
    /**
     * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer
     * or double-precision float type are safe for storing this value.
     */
    public int $fileSize;
}
