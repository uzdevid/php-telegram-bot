<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeChatAdministrators
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechatadministrators
 *
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
class BotCommandScopeChatAdministrators extends Type {
    /**
     * @var string Scope type, must be chat_administrators
     */
    public string $type;

    /**
     * @var int | string Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername). Channel direct messages chats and channel chats aren't supported.
     */
    public int | string $chatId;
}
