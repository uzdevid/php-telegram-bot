<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommand
 *
 * @link https://core.telegram.org/bots/api#botcommand
 *
 * This object represents a bot command.
 */
class BotCommand extends Type {
    /**
     * @var string Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     */
    public string $command;

    /**
     * @var string Description of the command; 1-256 characters.
     */
    public string $description;
}
