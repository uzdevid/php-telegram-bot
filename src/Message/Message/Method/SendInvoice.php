<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\ReplyParameters;
use UzDevid\Telegram\Bot\Type\SuggestedPostParameters;

/**
 * Method SendInvoice
 *
 * Use this method to send invoices. On success, the sent Message is returned.
 */
class SendInvoice extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $title Product name, 1-32 characters
     * @param string $description Product description, 1-255 characters
     * @param string $payload Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
     * @param string $currency Three-letter ISO 4217 currency code, see more on currencies. Pass “XTR” for payments in Telegram Stars.
     * @param array $prices Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in Telegram Stars.
     */
    public function __construct(int|string $chatId, string $title, string $description, string $payload, string $currency, array $prices) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('title', $title);
        $this->addAttribute('description', $description);
        $this->addAttribute('payload', $payload);
        $this->addAttribute('currency', $currency);
        $this->addAttribute('prices', $prices);
    }

    public function methodName(): string {
        return "sendInvoice";
    }

    /**
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * @param string $providerToken Payment provider token, obtained via @BotFather. Pass an empty string for payments in Telegram Stars.
     *
     * @return $this
     */
    public function providerToken(string $providerToken): static {
        $this->addAttribute('provider_token', $providerToken);
        return $this;
    }

    /**
     * @param int $maxTipAmount The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in Telegram Stars.
     *
     * @return $this
     */
    public function maxTipAmount(int $maxTipAmount): static {
        $this->addAttribute('max_tip_amount', $maxTipAmount);
        return $this;
    }

    /**
     * @param array $suggestedTipAmounts A JSON-serialized array of suggested amounts of tips in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     *
     * @return $this
     */
    public function suggestedTipAmounts(array $suggestedTipAmounts): static {
        $this->addAttribute('suggested_tip_amounts', $suggestedTipAmounts);
        return $this;
    }

    /**
     * @param string $startParameter Unique deep-linking parameter. If left empty, forwarded copies of the sent message will have a Pay button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a URL button with a deep link to the bot (instead of a Pay button), with the value used as the start parameter
     *
     * @return $this
     */
    public function startParameter(string $startParameter): static {
        $this->addAttribute('start_parameter', $startParameter);
        return $this;
    }

    /**
     * @param string $providerData JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     *
     * @return $this
     */
    public function providerData(string $providerData): static {
        $this->addAttribute('provider_data', $providerData);
        return $this;
    }

    /**
     * @param string $photoUrl URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     *
     * @return $this
     */
    public function photoUrl(string $photoUrl): static {
        $this->addAttribute('photo_url', $photoUrl);
        return $this;
    }

    /**
     * @param int $photoSize Photo size in bytes
     *
     * @return $this
     */
    public function photoSize(int $photoSize): static {
        $this->addAttribute('photo_size', $photoSize);
        return $this;
    }

    /**
     * @param int $photoWidth Photo width
     *
     * @return $this
     */
    public function photoWidth(int $photoWidth): static {
        $this->addAttribute('photo_width', $photoWidth);
        return $this;
    }

    /**
     * @param int $photoHeight Photo height
     *
     * @return $this
     */
    public function photoHeight(int $photoHeight): static {
        $this->addAttribute('photo_height', $photoHeight);
        return $this;
    }

    /**
     * @param bool $needName Pass True if you require the user's full name to complete the order. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function needName(bool $needName): static {
        $this->addAttribute('need_name', $needName);
        return $this;
    }

    /**
     * @param bool $needPhoneNumber Pass True if you require the user's phone number to complete the order. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function needPhoneNumber(bool $needPhoneNumber): static {
        $this->addAttribute('need_phone_number', $needPhoneNumber);
        return $this;
    }

    /**
     * @param bool $needEmail Pass True if you require the user's email address to complete the order. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function needEmail(bool $needEmail): static {
        $this->addAttribute('need_email', $needEmail);
        return $this;
    }

    /**
     * @param bool $needShippingAddress Pass True if you require the user's shipping address to complete the order. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function needShippingAddress(bool $needShippingAddress): static {
        $this->addAttribute('need_shipping_address', $needShippingAddress);
        return $this;
    }

    /**
     * @param bool $sendPhoneNumberToProvider Pass True if the user's phone number should be sent to the provider. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function sendPhoneNumberToProvider(bool $sendPhoneNumberToProvider): static {
        $this->addAttribute('send_phone_number_to_provider', $sendPhoneNumberToProvider);
        return $this;
    }

    /**
     * @param bool $sendEmailToProvider Pass True if the user's email address should be sent to the provider. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function sendEmailToProvider(bool $sendEmailToProvider): static {
        $this->addAttribute('send_email_to_provider', $sendEmailToProvider);
        return $this;
    }

    /**
     * @param bool $isFlexible Pass True if the final price depends on the shipping method. Ignored for payments in Telegram Stars.
     *
     * @return $this
     */
    public function isFlexible(bool $isFlexible): static {
        $this->addAttribute('is_flexible', $isFlexible);
        return $this;
    }

    /**
     * @param bool $disableNotification Sends the message silently. Users will receive a notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent Protects the contents of the sent message from forwarding and saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * @param string $messageEffectId Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param SuggestedPostParameters $suggestedPostParameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return $this
     */
    public function suggestedPostParameters(SuggestedPostParameters $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
        return $this;
    }

    /**
     * @param ReplyParameters $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(ReplyParameters $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
