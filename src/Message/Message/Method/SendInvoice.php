<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send invoices. On success, the sent Message is returned.
 *
 * Typical usage: instantiate the method with the required 'title', 'description', 'payload',
 * 'currency', and 'prices' fields, then chain optional builder methods before dispatching the
 * request.
 *
 * @see https://core.telegram.org/bots/api#sendinvoice
 */
class SendInvoice extends Method implements MethodInterface {
    /**
     * Creates a new SendInvoice method and sets the required 'title', 'description', 'payload',
     * 'currency', and 'prices' fields.
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
        return 'sendInvoice';
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and
     * private chats of bots with forum topic mode enabled only
     *
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a
     *   forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Identifier of the direct messages topic to which the message will be sent; required if the
     * message is sent to a direct messages chat
     *
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the
     *   message will be sent; required if the message is sent to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
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
     * Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have
     * a Pay button, allowing multiple users to pay directly from the forwarded message, using the
     * same invoice. If non-empty, forwarded copies of the sent message will have a URL button with
     * a deep link to the bot (instead of a Pay button), with the value used as the start parameter.
     *
     * @param string $startParameter Unique deep-linking parameter. If left empty, forwarded copies
     *   of the sent message will have a Pay button, allowing multiple users to pay directly from
     *   the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent
     *   message will have a URL button with a deep link to the bot (instead of a Pay button), with
     *   the value used as the start parameter.
     *
     * @return $this
     */
    public function startParameter(string $startParameter): static {
        $this->addAttribute('start_parameter', $startParameter);
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
     * for a service. People like it better when they see what they are paying for.
     *
     * @param string $photoUrl URL of the product photo for the invoice. Can be a photo of the goods
     *   or a marketing image for a service. People like it better when they see what they are
     *   paying for.
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

    /**
     * Sends the message silently . Users will receive a notification with no sound.
     *
     * @param bool $disableNotification Sends the message silently . Users will receive a
     *   notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * Protects the contents of the sent message from forwarding and saving
     *
     * @param bool $protectContent Protects the contents of the sent message from forwarding and
     *   saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of
     * 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring
     *   broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be
     *   withdrawn from the bot's balance.
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast = true): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @param string $messageEffectId Unique identifier of the message effect to be added to the
     *   message; for private chats only
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * A JSON-serialized object containing the parameters of the suggested post to send; for direct
     * messages chats only. If the message is sent as a reply to another suggested post, then that
     * suggested post is automatically declined.
     *
     * @param mixed $suggestedPostParameters A JSON-serialized object containing the parameters of
     *   the suggested post to send; for direct messages chats only. If the message is sent as a
     *   reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return $this
     */
    public function suggestedPostParameters(mixed $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
        return $this;
    }

    /**
     * Description of the message to reply to
     *
     * @param mixed $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(mixed $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * A JSON-serialized object for an inline keyboard . If empty, one 'Pay total price ' button
     * will be shown. If not empty, the first button must be a Pay button.
     *
     * @param mixed $replyMarkup A JSON-serialized object for an inline keyboard . If empty, one
     *   'Pay total price ' button will be shown. If not empty, the first button must be a Pay
     *   button.
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
