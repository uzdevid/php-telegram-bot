<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotShortDescription
 *
 * @link https://core.telegram.org/bots/api#botshortdescription
 *
 * This object represents the bot's short description.
 */
class BotShortDescription extends Type {
    /**
     * @var string The bot's short description
     */
    public string $shortDescription;
}
