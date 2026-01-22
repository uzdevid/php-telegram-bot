<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class GetMe extends Method implements MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string {
        return "getMe";
    }
}