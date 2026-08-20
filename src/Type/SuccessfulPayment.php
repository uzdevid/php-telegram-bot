<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuccessfulPayment
 *
 * @see https://core.telegram.org/bots/api#successfulpayment
 *
 * This object contains basic information about a successful payment.
 */
class SuccessfulPayment extends Type {
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
    /**
     * Bot-specified invoice payload
     */
    public string $invoicePayload;
    /**
     * Optional. Identifier of the shipping option chosen by the user
     */
    public string $shippingOptionId;
    /**
     * Optional. Order information provided by the user
     */
    public OrderInfo $orderInfo;
    /**
     * Telegram payment identifier
     */
    public string $telegramPaymentChargeId;
    /**
     * Provider payment identifier
     */
    public string $providerPaymentChargeId;
}
