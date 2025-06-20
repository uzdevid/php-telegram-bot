<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Voice
 *
 * @link https://core.telegram.org/bots/api#voice
 *
 * This object represents a voice note.
 */
class Voice extends Type {


    public string $fileId;
    public string $fileUniqueId;
    public int $duration;
    public string $mimeType;
    public int $fileSize;
}