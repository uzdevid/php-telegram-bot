<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetFile
 *
 * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 */
class GetFile extends Method implements MethodInterface {

    /**
     * @param string $fileId File identifier to get information about
     */
    public function __construct(string $fileId) {
        parent::__construct();

        $this->addAttribute('file_id', $fileId);
    }

    public function methodName(): string {
        return "getFile";
    }


}
