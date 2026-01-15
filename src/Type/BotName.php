<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotName
 *
 * @link https://core.telegram.org/bots/api#botname
 *
 * This object represents the bot's name.
 */
class BotName extends Type {
    /**
     * @var string The bot's name
     */
    public string $name;
}
