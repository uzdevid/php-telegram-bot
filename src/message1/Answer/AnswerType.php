<?php

namespace UzDevid\Telegram\Bot\Message\Answer;

use UzDevid\Telegram\Bot\Core\AttributeContainer;

class AnswerType {
    use AttributeContainer;

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }
}