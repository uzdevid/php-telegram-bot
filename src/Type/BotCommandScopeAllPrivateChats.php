<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeAllPrivateChats
 *
 * @see https://core.telegram.org/bots/api#BotCommandScopeAllPrivateChats
 *
 * This object represents a bot command.
 */
class BotCommandScopeAllPrivateChats extends Type {
    /**
     * Scope type, must be all_private_chats
     */
    public string $type;
}
