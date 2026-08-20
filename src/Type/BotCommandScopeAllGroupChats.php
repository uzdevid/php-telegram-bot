<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeAllGroupChats
 *
 * @see https://core.telegram.org/bots/api#BotCommandScopeAllGroupChats
 *
 * This object represents a bot command.
 */
class BotCommandScopeAllGroupChats extends Type {
    /**
     * Scope type, must be all_group_chats
     */
    public string $type;
}
