<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\inline;

use UzDevid\Telegram\Bot\Message\Message\Keyboard\Keyboard;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;

class InlineKeyboardMarkup extends Keyboard implements ReplyMarkupInterface {
    protected string $name = 'inline_keyboard';
}