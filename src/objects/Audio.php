<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Audio
 *
 * @link https://core.telegram.org/bots/api#audio
 *
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $duration
 * @property string $performer
 * @property string $title
 * @property string $fileName
 * @property string $mimeType
 * @property int $fileSize
 * @property PhotoSize $thumbnail
 */
class Audio extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}