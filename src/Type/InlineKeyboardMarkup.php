<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineKeyboardMarkup
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup extends Type {
    /**
     * @var InlineKeyboardButton[][] Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    public array $inlineKeyboard;
}
