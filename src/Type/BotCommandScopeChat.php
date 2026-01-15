<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeChat
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechat
 *
 * Represents the scope of bot commands, covering a specific chat.
 */
class BotCommandScopeChat extends Type {
    /**
     * @var string Scope type, must be chat
     */
    public string $type;

    /**
     * @var int | string Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername). Channel direct messages chats and channel chats aren't supported.
     */
    public int | string $chatId;
}
