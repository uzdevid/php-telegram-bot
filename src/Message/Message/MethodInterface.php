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
     * @param array $data
     * @return mixed
     */
    public function response(array $data): mixed;
}