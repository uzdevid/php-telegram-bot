<?php

namespace UzDevid\Telegram\Bot\Message\Message;

interface MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string;
    
    /**
     * @return array
     */
    public function getPayload(): array;

    /**
     * @return string
     */
    public function response(): string;
}