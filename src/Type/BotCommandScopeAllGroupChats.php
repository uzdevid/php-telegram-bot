<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeAllGroupChats
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallgroupchats
 *
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats extends Type {
    /**
     * @var string Scope type, must be all_group_chats
     */
    public string $type;
}
