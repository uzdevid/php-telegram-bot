<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Dice
 *
 * @see https://core.telegram.org/bots/api#dice
 *
 * This object represents an animated emoji that displays a random value.
 */
class Dice extends Type {
    /**
     * Emoji on which the dice throw animation is based
     */
    public string $emoji;
    /**
     * Value of the dice, 1-6 for “”, “” and “” base emoji, 1-5 for “” and “” base emoji, 1-64 for
     * “” base emoji
     */
    public int $value;
}
