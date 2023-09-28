<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Document
 *
 * @link https://core.telegram.org/bots/api#document
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property PhotoSize $thumbnail
 * @property string $fileName
 * @property string $mimeType
 * @property int $fileSize
 *
 */
class Document extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}