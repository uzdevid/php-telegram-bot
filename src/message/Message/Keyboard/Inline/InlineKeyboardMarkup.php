<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline;

use JsonException;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\Keyboard;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;

class InlineKeyboardMarkup extends Keyboard implements ReplyMarkupInterface {
    protected string $name = 'inline_keyboard';

    /**
     * @return string
     * @throws JsonException
     */
    public function __toString(): string {
        return json_encode($this->attributes, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }
}