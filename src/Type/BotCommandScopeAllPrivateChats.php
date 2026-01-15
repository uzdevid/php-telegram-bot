<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeAllPrivateChats
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallprivatechats
 *
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats extends Type {
    /**
     * @var string Scope type, must be all_private_chats
     */
    public string $type;
}
