<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\File;

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
     * @return string
     */
    public function response(): string {
        return File::class;
    }
}