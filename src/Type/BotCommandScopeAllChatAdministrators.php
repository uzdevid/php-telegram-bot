<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeAllChatAdministrators
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
 *
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends Type {
    /**
     * @var string Scope type, must be all_chat_administrators
     */
    public string $type;
}
