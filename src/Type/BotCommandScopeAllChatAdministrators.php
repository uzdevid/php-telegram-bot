<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeAllChatAdministrators
 *
 * @see https://core.telegram.org/bots/api#BotCommandScopeAllChatAdministrators
 *
 * This object represents a bot command.
 */
class BotCommandScopeAllChatAdministrators extends Type {
    /**
     * Scope type, must be all_chat_administrators
     */
    public string $type;
}
