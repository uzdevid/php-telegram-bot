<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputInvoiceMessageContent
 *
 * @link https://core.telegram.org/bots/api#inputinvoicemessagecontent
 *
 * Represents the content of an invoice message to be sent as the result of an inline query.
 */
class InputInvoiceMessageContent extends Type {
    /**
     * @var string Product name, 1-32 characters
     */
    public string $title;

    /**
     * @var string Product description, 1-255 characters
     */
    public string $description;

    /**
     * @var string Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     */
    public string $payload;

    /**
     * @var string|null Optional. Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
     */
    public string|null $providerToken;

    /**
     * @var string Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
     */
    public string $currency;

    /**
     * @var LabeledPrice[] Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     */
    public array $prices;

    /**
     * @var int|null Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     */
    public int|null $maxTipAmount;

    /**
     * @var int[]|null Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     */
    public array|null $suggestedTipAmounts;

    /**
     * @var string|null Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     */
    public string|null $providerData;

    /**
     * @var string|null Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     */
    public string|null $photoUrl;

    /**
     * @var int|null Optional. Photo size in bytes
     */
    public int|null $photoSize;

    /**
     * @var int|null Optional. Photo width
     */
    public int|null $photoWidth;

    /**
     * @var int|null Optional. Photo height
     */
    public int|null $photoHeight;

    /**
     * @var bool|null Optional. Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
     */
    public bool|null $needName;

    /**
     * @var bool|null Optional. Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
     */
    public bool|null $needPhoneNumber;

    /**
     * @var bool|null Optional. Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
     */
    public bool|null $needEmail;

    /**
     * @var bool|null Optional. Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
     */
    public bool|null $needShippingAddress;

    /**
     * @var bool|null Optional. Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
     */
    public bool|null $sendPhoneNumberToProvider;

    /**
     * @var bool|null Optional. Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
     */
    public bool|null $sendEmailToProvider;

    /**
     * @var bool|null Optional. Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     */
    public bool|null $isFlexible;
}
