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
    public string $fileId;
    public string $fileUniqueId;
    public PhotoSize $thumbnail;
    public string $fileName;
    public string $mimeType;
    public int $fileSize;
}