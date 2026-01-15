<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type RefundedPayment
 *
 * @link https://core.telegram.org/bots/api#refundedpayment
 *
 * This object contains basic information about a refunded payment.
 */
class RefundedPayment extends Type {
    /**
     * @var string Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars. Currently, always “XTR”
     */
    public string $currency;

    /**
     * @var int Total refunded price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public int $totalAmount;

    /**
     * @var string Bot-specified invoice payload
     */
    public string $invoicePayload;

    /**
     * @var string Telegram payment identifier
     */
    public string $telegramPaymentChargeId;

    /**
     * @var string|null Optional. Provider payment identifier
     */
    public string|null $providerPaymentChargeId;
}
