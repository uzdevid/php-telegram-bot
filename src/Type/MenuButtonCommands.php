<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MenuButtonCommands
 *
 * @link https://core.telegram.org/bots/api#menubuttoncommands
 *
 * Represents a menu button, which opens the bot's list of commands.
 */
class MenuButtonCommands extends Type {
    /**
     * @var string Type of the button, must be commands
     */
    public string $type;
}
