<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeChat
 *
 * @see https://core.telegram.org/bots/api#BotCommandScopeChat
 *
 * This object represents a bot command.
 */
class BotCommandScopeChat extends Type {
    /**
     * Scope type, must be chat
     */
    public string $type;
    /**
     * Unique identifier for the target chat or username of the target supergroup in the format @username. Channel
     * direct messages chats and channel chats aren't supported.
     */
    public string $chatId;
}
