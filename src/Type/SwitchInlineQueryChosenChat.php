<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SwitchInlineQueryChosenChat
 *
 * @link https://core.telegram.org/bots/api#switchinlinequerychosenchat
 *
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 */
class SwitchInlineQueryChosenChat extends Type {
    public string $query;
    public bool $allowUserChats;
    public bool $allowBotChats;
    public bool $allowGroupChats;
    public bool $allowChannelChats;
}