<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type VideoNote
 *
 * @link https://core.telegram.org/bots/api#videonote
 *
 * This object represents a video message (https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of v.4.0).
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $length
 * @property int $duration
 * @property PhotoSize $thumbnail
 * @property int $fileSize
 */
class VideoNote extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}