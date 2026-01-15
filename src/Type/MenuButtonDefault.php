<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MenuButtonDefault
 *
 * @link https://core.telegram.org/bots/api#menubuttondefault
 *
 * Describes that no specific value for the menu button was set.
 */
class MenuButtonDefault extends Type {
    /**
     * @var string Type of the button, must be default
     */
    public string $type;
}
