<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PassportFile
 *
 * @see https://core.telegram.org/bots/api#passportfile
 *
 * This object represents a file uploaded to Telegram Passport. Currently, all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile extends Type {
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
     * File size in bytes
     */
    public int $fileSize;
    /**
     * Unix time when the file was uploaded
     */
    public int $fileDate;
}
