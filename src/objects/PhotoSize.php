<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type PhotoSize
 *
 * @link https://core.telegram.org/bots/api#photosize
 *
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $width
 * @property int $height
 * @property int $fileSize
 */
class PhotoSize extends BaseObject { }