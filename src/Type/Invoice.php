<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Invoice
 *
 * @see https://core.telegram.org/bots/api#invoice
 *
 * This object contains basic information about an invoice.
 */
class Invoice extends Type {
    /**
     * Product name
     */
    public string $title;
    /**
     * Product description
     */
    public string $description;
    /**
     * Unique bot deep-linking parameter that can be used to generate this invoice
     */
    public string $startParameter;
    /**
     * Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     */
    public string $currency;
    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
     * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal
     * point for each currency (2 for the majority of currencies).
     */
    public int $totalAmount;
}
