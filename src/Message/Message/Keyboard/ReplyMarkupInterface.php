<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard;

use JsonException;

interface ReplyMarkupInterface {
    /**
     * @return string
     * @throws JsonException
     */
    public function __toString(): string;
}