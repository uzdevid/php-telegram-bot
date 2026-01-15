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
