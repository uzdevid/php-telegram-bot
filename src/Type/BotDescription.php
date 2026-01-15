<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotDescription
 *
 * @link https://core.telegram.org/bots/api#botdescription
 *
 * This object represents the bot's description.
 */
class BotDescription extends Type {
    /**
     * @var string The bot's description
     */
    public string $description;
}
