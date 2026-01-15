<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MenuButton
 *
 * @link https://core.telegram.org/bots/api#menubutton
 *
 * This object describes the bot's menu button in a private chat. It should be one of
 */
class MenuButton extends Type {
    /**
     * @var string Type of the button, must be commands
     */
    public string $type;
}
