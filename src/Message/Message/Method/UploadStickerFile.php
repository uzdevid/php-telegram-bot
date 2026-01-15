<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InputFile;

/**
 * Method UploadStickerFile
 *
 * Use this method to upload a file with a sticker for later use in the createNewStickerSet, addStickerToSet, or replaceStickerInSet methods (the file can be used multiple times). Returns the uploaded File on success.
 */
class UploadStickerFile extends Method implements MethodInterface {

    /**
     * @param int $userId User identifier of sticker file owner
     * @param InputFile $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers for technical requirements. More information on Sending Files »
     * @param string $stickerFormat Format of the sticker, must be one of “static”, “animated”, “video”
     */
    public function __construct(int $userId, InputFile $sticker, string $stickerFormat) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('sticker', $sticker);
        $this->addAttribute('sticker_format', $stickerFormat);
    }

    public function methodName(): string {
        return "uploadStickerFile";
    }


}
