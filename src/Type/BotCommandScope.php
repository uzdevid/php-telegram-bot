<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScope
 *
 * @link https://core.telegram.org/bots/api#botcommandscope
 *
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 */
class BotCommandScope extends Type {
    /**
     * @var string Scope type, must be default
     */
    public string $type;
}
