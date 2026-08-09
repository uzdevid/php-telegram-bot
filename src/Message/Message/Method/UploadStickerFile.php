<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to upload a file with a sticker for later use in the createNewStickerSet ,
 * addStickerToSet , or replaceStickerInSet methods (the file can be used multiple times). Returns
 * the uploaded File on success.
 *
 * Typical usage: instantiate the method with the required 'user_id', 'sticker', and
 * 'sticker_format' fields and dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#uploadstickerfile
 */
class UploadStickerFile extends Method implements MethodInterface {
    /**
     * Creates a new UploadStickerFile method and sets the required 'user_id', 'sticker', and
     * 'sticker_format' fields.
     *
     * @param int $userId User identifier of sticker file owner
     * @param string $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See
     *   https://core.telegram.org/stickers for technical requirements. More information on Sending
     *   Files »
     * @param string $stickerFormat Format of the sticker, must be one of “static”, “animated”,
     *   “video”
     */
    public function __construct(int $userId, string $sticker, string $stickerFormat) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('sticker', $sticker);
        $this->addAttribute('sticker_format', $stickerFormat);
    }

    public function methodName(): string {
        return 'uploadStickerFile';
    }
}
