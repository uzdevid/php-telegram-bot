<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeDefault
 *
 * @see https://core.telegram.org/bots/api#botcommandscopedefault
 *
 * This object represents a bot command.
 */
class BotCommandScopeDefault extends Type {
    /**
     * Scope type, must be default
     */
    public string $type;
}
