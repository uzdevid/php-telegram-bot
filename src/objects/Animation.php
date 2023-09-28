<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Animation
 *
 * @link https://core.telegram.org/bots/api#animation
 *
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $width
 * @property int $height
 * @property int $duration
 * @property PhotoSize $thumbnail
 * @property string $fileName
 * @property string $mimeType
 * @property int $fileSize
 */
class Animation extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}