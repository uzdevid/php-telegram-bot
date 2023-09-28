<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type File
 *
 * @link https://core.telegram.org/bots/api#file
 *
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $fileSize
 * @property string $filePath
 */
class File extends BaseObject { }