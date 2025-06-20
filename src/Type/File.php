<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type File
 *
 * @link https://core.telegram.org/bots/api#file
 *
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 */
class File extends Type {

    public string $fileId;
    public string $fileUniqueId;
    public int $fileSize;
    public string $filePath;
}