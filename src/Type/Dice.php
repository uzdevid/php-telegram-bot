<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Dice
 *
 * @link https://core.telegram.org/bots/api#dice
 *
 * This object represents an animated emoji that displays a random value.
 */
class Dice extends Type {
    public string $emoji;
    public int $value;
}