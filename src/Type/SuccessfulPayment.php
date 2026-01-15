<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuccessfulPayment
 *
 * @link https://core.telegram.org/bots/api#successfulpayment
 *
 * This object contains basic information about a successful payment. Note that if the buyer initiates a chargeback with the relevant payment provider following this transaction, the funds may be debited from your balance. This is outside of Telegram's control.
 */
class SuccessfulPayment extends Type {
    /**
     * @var string Three-letter ISO 4217 currency code, or “XTR” for payments in Telegram Stars
     */
    public string $currency;

    /**
     * @var int Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public int $totalAmount;

    /**
     * @var string Bot-specified invoice payload
     */
    public string $invoicePayload;

    /**
     * @var int|null Optional. Expiration date of the subscription, in Unix time; for recurring payments only
     */
    public int|null $subscriptionExpirationDate;

    /**
     * @var bool|null Optional. True, if the payment is a recurring payment for a subscription
     */
    public bool|null $isRecurring;

    /**
     * @var bool|null Optional. True, if the payment is the first payment for a subscription
     */
    public bool|null $isFirstRecurring;

    /**
     * @var string|null Optional. Identifier of the shipping option chosen by the user
     */
    public string|null $shippingOptionId;

    /**
     * @var OrderInfo|null Optional. Order information provided by the user
     */
    public OrderInfo|null $orderInfo;

    /**
     * @var string Telegram payment identifier
     */
    public string $telegramPaymentChargeId;

    /**
     * @var string Provider payment identifier
     */
    public string $providerPaymentChargeId;
}
