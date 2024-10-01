<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\File;
use UzDevid\Telegram\Bot\Type\UserProfilePhotos;
use Yiisoft\Hydrator\Hydrator;

class GetFile extends Method implements MethodInterface {
    /**
     * @param string $file_id
     */
    public function __construct(string $file_id) {
        parent::__construct();

        $this->addAttribute('file_id', $file_id);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getFile";
    }

    /**
     * @param array $data
     * @return File
     */
    public function response(array $data): File {
        return (new Hydrator())->create(File::class, $data['result']);
    }
}