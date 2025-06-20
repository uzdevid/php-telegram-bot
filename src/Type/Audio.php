<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Audio
 *
 * @link https://core.telegram.org/bots/api#audio
 *
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio extends Type {
    public string $fileId;
    public string $fileUniqueId;
    public int $duration;
    public string $performer;
    public string $title;
    public string $fileName;
    public string $mimeType;
    public int $fileSize;
    public PhotoSize $thumbnail;
}