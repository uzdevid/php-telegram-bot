<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeDefault
 *
 * @link https://core.telegram.org/bots/api#botcommandscopedefault
 *
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault extends Type {
    /**
     * @var string Scope type, must be default
     */
    public string $type;
}
