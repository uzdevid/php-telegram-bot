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
    public string $command;
    public string $description;
}