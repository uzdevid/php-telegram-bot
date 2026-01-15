<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StarAmount
 *
 * @link https://core.telegram.org/bots/api#staramount
 *
 * Describes an amount of Telegram Stars.
 */
class StarAmount extends Type {
    /**
     * @var int Integer amount of Telegram Stars, rounded to 0; can be negative
     */
    public int $amount;

    /**
     * @var int|null Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
     */
    public int|null $nanostarAmount;
}
