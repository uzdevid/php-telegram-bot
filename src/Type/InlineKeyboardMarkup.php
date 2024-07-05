<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InlineKeyboardMarkup
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * This object represents a service message about a video chat ended in the chat.
 */
class InlineKeyboardMarkup extends Type {
    public InlineKeyboardButton $inlineKeyboardButton;
}