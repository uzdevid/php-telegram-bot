<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\File;
use Yiisoft\Hydrator\Hydrator;

/**
 * Use this method to get basic information about a file and prepare it for downloading. For the
 * moment, bots can download files of up to 20MB in size. On success, a File object is returned. The
 * file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path> ,
 * where <file_path> is taken from the response. It is guaranteed that the link will be valid for at
 * least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 *
 * Typical usage: instantiate the method with the required 'file_id' field and dispatch the request
 * directly.
 *
 * @see https://core.telegram.org/bots/api#getfile
 */
class GetFile extends Method implements MethodInterface {
    /**
     * Creates a new GetFile method and sets the required 'file_id' field.
     *
     * @param string $file_id File identifier to get information about
     */
    public function __construct(string $file_id) {
        parent::__construct();

        $this->addAttribute('file_id', $file_id);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'getFile';
    }

    /**
     * Hydrates the successful Bot API response into a File instance.
     *
     * @param array $data raw Telegram Bot API response payload
     *
     * @return File
     */
    public function response(array $data): File {
        return (new Hydrator())->create(File::class, $data['result']);
    }
}
