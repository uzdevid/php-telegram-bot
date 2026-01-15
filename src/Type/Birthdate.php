<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Birthdate
 *
 * @link https://core.telegram.org/bots/api#birthdate
 *
 * Describes the birthdate of a user.
 */
class Birthdate extends Type {
    /**
     * @var int Day of the user's birth; 1-31
     */
    public int $day;

    /**
     * @var int Month of the user's birth; 1-12
     */
    public int $month;

    /**
     * @var int|null Optional. Year of the user's birth
     */
    public int|null $year;
}
