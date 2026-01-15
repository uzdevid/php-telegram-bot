<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Gifts
 *
 * @link https://core.telegram.org/bots/api#gifts
 *
 * This object represent a list of gifts.
 */
class Gifts extends Type {
    /**
     * @var Gift[] The list of gifts
     */
    public array $gifts;
}
