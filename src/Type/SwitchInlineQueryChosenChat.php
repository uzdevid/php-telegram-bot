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
    /**
     * @var string|null Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
     */
    public string|null $query;

    /**
     * @var bool|null Optional. True, if private chats with users can be chosen
     */
    public bool|null $allowUserChats;

    /**
     * @var bool|null Optional. True, if private chats with bots can be chosen
     */
    public bool|null $allowBotChats;

    /**
     * @var bool|null Optional. True, if group and supergroup chats can be chosen
     */
    public bool|null $allowGroupChats;

    /**
     * @var bool|null Optional. True, if channel chats can be chosen
     */
    public bool|null $allowChannelChats;
}
