<?php

namespace UzDevid\Telegram\Bot\Message\Message;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;

/**
 *
 * @property-read array $payload
 */
class Method {
    use AttributeContainer;

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }

    /**
     * @param array $data
     * @return string
     */
    public function response(array $data): mixed {
        return $data;
    }
}