<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SwitchInlineQueryChosenChat
 *
 * @see https://core.telegram.org/bots/api#switchinlinequerychosenchat
 *
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 */
class SwitchInlineQueryChosenChat extends Type {
    /**
     * Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username
     * will be inserted.
     */
    public string $query;
    /**
     * Optional. True, if private chats with users can be chosen
     */
    public bool $allowUserChats;
    /**
     * Optional. True, if private chats with bots can be chosen
     */
    public bool $allowBotChats;
    /**
     * Optional. True, if group and supergroup chats can be chosen
     */
    public bool $allowGroupChats;
    /**
     * Optional. True, if channel chats can be chosen
     */
    public bool $allowChannelChats;
}
