<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to create a link for an invoice. Returns the created invoice link as String on
 * success.
 *
 * Typical usage: instantiate the method with the required 'title', 'description', 'payload',
 * 'currency', and 'prices' fields, then chain optional builder methods before dispatching the
 * request.
 *
 * @see https://core.telegram.org/bots/api#createinvoicelink
 */
class CreateInvoiceLink extends Method implements MethodInterface {
    /**
     * Creates a new CreateInvoiceLink method and sets the required 'title', 'description',
     * 'payload', 'currency', and 'prices' fields.
     *
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed
     *   to the user, use it for your internal processes.
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies . Pass
     *   “XTR” for payments in Telegram Stars .
     * @param array $prices Price breakdown, a JSON-serialized list of components (e.g. product
     *   price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one
     *   item for payments in Telegram Stars .
     */
    public function __construct(string $title, string $description, string $payload, string $currency, array $prices) {
        parent::__construct();
        $this->addAttribute('title', $title);
        $this->addAttribute('description', $description);
        $this->addAttribute('payload', $payload);
        $this->addAttribute('currency', $currency);
        $this->addAttribute('prices', $prices);
    }

    public function methodName(): string {
        return 'createInvoiceLink';
    }

    /**
     * Unique identifier of the business connection on behalf of which the link will be created. For
     * payments in Telegram Stars only.
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the link will be created. For payments in Telegram Stars only.
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Payment provider token, obtained via @BotFather . Pass an empty string for payments in
     * Telegram Stars .
     *
     * @param string $providerToken Payment provider token, obtained via @BotFather . Pass an empty
     *   string for payments in Telegram Stars .
     *
     * @return $this
     */
    public function providerToken(string $providerToken): static {
        $this->addAttribute('provider_token', $providerToken);
        return $this;
    }

    /**
     * The number of seconds the subscription will be active for before the next payment. The
     * currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must
     * always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a
     * given bot at the same time, including multiple concurrent subscriptions from the same user.
     * Subscription price must no exceed 10000 Telegram Stars.
     *
     * @param int $subscriptionPeriod The number of seconds the subscription will be active for
     *   before the next payment. The currency must be set to “XTR” (Telegram Stars) if the
     *   parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number
     *   of subscriptions can be active for a given bot at the same time, including multiple
     *   concurrent subscriptions from the same user. Subscription price must no exceed 10000
     *   Telegram Stars.
     *
     * @return $this
     */
    public function subscriptionPeriod(int $subscriptionPeriod): static {
        $this->addAttribute('subscription_period', $subscriptionPeriod);
        return $this;
    }

    /**
     * The maximum accepted amount for tips in the smallest units of the currency (integer, not
     * float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145 . See the
     * exp parameter in currencies.json , it shows the number of digits past the decimal point for
     * each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments
     * in Telegram Stars .
     *
     * @param int $maxTipAmount The maximum accepted amount for tips in the smallest units of the
     *   currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass
     *   max_tip_amount = 145 . See the exp parameter in currencies.json , it shows the number of
     *   digits past the decimal point for each currency (2 for the majority of currencies).
     *   Defaults to 0. Not supported for payments in Telegram Stars .
     *
     * @return $this
     */
    public function maxTipAmount(int $maxTipAmount): static {
        $this->addAttribute('max_tip_amount', $maxTipAmount);
        return $this;
    }

    /**
     * A JSON-serialized Array of suggested amounts of tips in the smallest units of the currency
     * (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested
     * tip amounts must be positive, passed in a strictly increased order and must not exceed
     * max_tip_amount .
     *
     * @param array $suggestedTipAmounts A JSON-serialized Array of suggested amounts of tips in the
     *   smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts
     *   can be specified. The suggested tip amounts must be positive, passed in a strictly
     *   increased order and must not exceed max_tip_amount .
     *
     * @return $this
     */
    public function suggestedTipAmounts(array $suggestedTipAmounts): static {
        $this->addAttribute('suggested_tip_amounts', $suggestedTipAmounts);
        return $this;
    }

    /**
     * Adds one item to the suggested_tip_amounts list. A JSON-serialized Array of suggested amounts
     * of tips in the smallest units of the currency (integer, not float/double). At most 4
     * suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in
     * a strictly increased order and must not exceed max_tip_amount .
     *
     * @param int $suggestedTipAmount Adds one item to the suggested_tip_amounts list. A
     *   JSON-serialized Array of suggested amounts of tips in the smallest units of the currency
     *   (integer, not float/double). At most 4 suggested tip amounts can be specified. The
     *   suggested tip amounts must be positive, passed in a strictly increased order and must not
     *   exceed max_tip_amount .
     *
     * @return $this
     */
    public function addSuggestedTipAmount(int $suggestedTipAmount): static {
        $this->pushAttribute('suggested_tip_amounts', $suggestedTipAmount);
        return $this;
    }

    /**
     * JSON-serialized data about the invoice, which will be shared with the payment provider. A
     * detailed description of required fields should be provided by the payment provider.
     *
     * @param string $providerData JSON-serialized data about the invoice, which will be shared with
     *   the payment provider. A detailed description of required fields should be provided by the
     *   payment provider.
     *
     * @return $this
     */
    public function providerData(string $providerData): static {
        $this->addAttribute('provider_data', $providerData);
        return $this;
    }

    /**
     * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image
     * for a service.
     *
     * @param string $photoUrl URL of the product photo for the invoice. Can be a photo of the goods
     *   or a marketing image for a service.
     *
     * @return $this
     */
    public function photoUrl(string $photoUrl): static {
        $this->addAttribute('photo_url', $photoUrl);
        return $this;
    }

    /**
     * Photo size in bytes
     *
     * @param int $photoSize Photo size in bytes
     *
     * @return $this
     */
    public function photoSize(int $photoSize): static {
        $this->addAttribute('photo_size', $photoSize);
        return $this;
    }

    /**
     * Photo width
     *
     * @param int $photoWidth Photo width
     *
     * @return $this
     */
    public function photoWidth(int $photoWidth): static {
        $this->addAttribute('photo_width', $photoWidth);
        return $this;
    }

    /**
     * Photo height
     *
     * @param int $photoHeight Photo height
     *
     * @return $this
     */
    public function photoHeight(int $photoHeight): static {
        $this->addAttribute('photo_height', $photoHeight);
        return $this;
    }

    /**
     * Pass True if you require the user's full name to complete the order. Ignored for payments in
     * Telegram Stars .
     *
     * @param bool $needName Pass True if you require the user's full name to complete the order.
     *   Ignored for payments in Telegram Stars .
     *
     * @return $this
     */
    public function needName(bool $needName = true): static {
        $this->addAttribute('need_name', $needName);
        return $this;
    }

    /**
     * Pass True if you require the user's phone number to complete the order. Ignored for payments
     * in Telegram Stars .
     *
     * @param bool $needPhoneNumber Pass True if you require the user's phone number to complete the
     *   order. Ignored for payments in Telegram Stars .
     *
     * @return $this
     */
    public function needPhoneNumber(bool $needPhoneNumber = true): static {
        $this->addAttribute('need_phone_number', $needPhoneNumber);
        return $this;
    }

    /**
     * Pass True if you require the user's email address to complete the order. Ignored for payments
     * in Telegram Stars .
     *
     * @param bool $needEmail Pass True if you require the user's email address to complete the
     *   order. Ignored for payments in Telegram Stars .
     *
     * @return $this
     */
    public function needEmail(bool $needEmail = true): static {
        $this->addAttribute('need_email', $needEmail);
        return $this;
    }

    /**
     * Pass True if you require the user's shipping address to complete the order. Ignored for
     * payments in Telegram Stars .
     *
     * @param bool $needShippingAddress Pass True if you require the user's shipping address to
     *   complete the order. Ignored for payments in Telegram Stars .
     *
     * @return $this
     */
    public function needShippingAddress(bool $needShippingAddress = true): static {
        $this->addAttribute('need_shipping_address', $needShippingAddress);
        return $this;
    }

    /**
     * Pass True if the user's phone number should be sent to the provider. Ignored for payments in
     * Telegram Stars .
     *
     * @param bool $sendPhoneNumberToProvider Pass True if the user's phone number should be sent to
     *   the provider. Ignored for payments in Telegram Stars .
     *
     * @return $this
     */
    public function sendPhoneNumberToProvider(bool $sendPhoneNumberToProvider = true): static {
        $this->addAttribute('send_phone_number_to_provider', $sendPhoneNumberToProvider);
        return $this;
    }

    /**
     * Pass True if the user's email address should be sent to the provider. Ignored for payments in
     * Telegram Stars .
     *
     * @param bool $sendEmailToProvider Pass True if the user's email address should be sent to the
     *   provider. Ignored for payments in Telegram Stars .
     *
     * @return $this
     */
    public function sendEmailToProvider(bool $sendEmailToProvider = true): static {
        $this->addAttribute('send_email_to_provider', $sendEmailToProvider);
        return $this;
    }

    /**
     * Pass True if the final price depends on the shipping method. Ignored for payments in Telegram
     * Stars .
     *
     * @param bool $isFlexible Pass True if the final price depends on the shipping method. Ignored
     *   for payments in Telegram Stars .
     *
     * @return $this
     */
    public function isFlexible(bool $isFlexible = true): static {
        $this->addAttribute('is_flexible', $isFlexible);
        return $this;
    }
}
