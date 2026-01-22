<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class GetChat extends Method implements MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string {
        return "getChat";
    }
}