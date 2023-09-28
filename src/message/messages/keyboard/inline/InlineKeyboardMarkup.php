<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\inline;

use uzdevid\telegram\bot\message\messages\keyboard\Keyboard;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;

class InlineKeyboardMarkup extends Keyboard implements ReplyMarkupInterface {
    protected string $name = 'inline_keyboard';
}