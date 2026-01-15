<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type LabeledPrice
 *
 * @link https://core.telegram.org/bots/api#labeledprice
 *
 * This object represents a portion of the price for goods or services.
 */
class LabeledPrice extends Type {
    /**
     * @var string Portion label
     */
    public string $label;

    /**
     * @var int Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public int $amount;
}
