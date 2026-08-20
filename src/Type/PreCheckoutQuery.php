<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

class PreCheckoutQuery extends Type {
    /**
     * Unique query identifier
     */
    public string $id;
    /**
     * User who sent the query
     */
    public User $from;
    /**
     * Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     */
    public string $currency;
    /**
     * Bot-specified invoice payload
     */
    public string $invoicePayload;
    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
     * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal
     * point for each currency (2 for the majority of currencies).
     */
    public int $totalAmount;
}
