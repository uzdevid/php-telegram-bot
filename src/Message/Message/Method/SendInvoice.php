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
     * @param int $messageThreadId
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param int $directMessagesTopicId
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * @param string $providerToken
     *
     * @return $this
     */
    public function providerToken(string $providerToken): static {
        $this->addAttribute('provider_token', $providerToken);
        return $this;
    }

    /**
     * @param int $maxTipAmount
     *
     * @return $this
     */
    public function maxTipAmount(int $maxTipAmount): static {
        $this->addAttribute('max_tip_amount', $maxTipAmount);
        return $this;
    }

    /**
     * @param array $suggestedTipAmounts
     *
     * @return $this
     */
    public function suggestedTipAmounts(array $suggestedTipAmounts): static {
        $this->addAttribute('suggested_tip_amounts', $suggestedTipAmounts);
        return $this;
    }

    /**
     * @param string $startParameter
     *
     * @return $this
     */
    public function startParameter(string $startParameter): static {
        $this->addAttribute('start_parameter', $startParameter);
        return $this;
    }

    /**
     * @param string $providerData
     *
     * @return $this
     */
    public function providerData(string $providerData): static {
        $this->addAttribute('provider_data', $providerData);
        return $this;
    }

    /**
     * @param string $photoUrl
     *
     * @return $this
     */
    public function photoUrl(string $photoUrl): static {
        $this->addAttribute('photo_url', $photoUrl);
        return $this;
    }

    /**
     * @param int $photoSize
     *
     * @return $this
     */
    public function photoSize(int $photoSize): static {
        $this->addAttribute('photo_size', $photoSize);
        return $this;
    }

    /**
     * @param int $photoWidth
     *
     * @return $this
     */
    public function photoWidth(int $photoWidth): static {
        $this->addAttribute('photo_width', $photoWidth);
        return $this;
    }

    /**
     * @param int $photoHeight
     *
     * @return $this
     */
    public function photoHeight(int $photoHeight): static {
        $this->addAttribute('photo_height', $photoHeight);
        return $this;
    }

    /**
     * @param bool $needName
     *
     * @return $this
     */
    public function needName(bool $needName): static {
        $this->addAttribute('need_name', $needName);
        return $this;
    }

    /**
     * @param bool $needPhoneNumber
     *
     * @return $this
     */
    public function needPhoneNumber(bool $needPhoneNumber): static {
        $this->addAttribute('need_phone_number', $needPhoneNumber);
        return $this;
    }

    /**
     * @param bool $needEmail
     *
     * @return $this
     */
    public function needEmail(bool $needEmail): static {
        $this->addAttribute('need_email', $needEmail);
        return $this;
    }

    /**
     * @param bool $needShippingAddress
     *
     * @return $this
     */
    public function needShippingAddress(bool $needShippingAddress): static {
        $this->addAttribute('need_shipping_address', $needShippingAddress);
        return $this;
    }

    /**
     * @param bool $sendPhoneNumberToProvider
     *
     * @return $this
     */
    public function sendPhoneNumberToProvider(bool $sendPhoneNumberToProvider): static {
        $this->addAttribute('send_phone_number_to_provider', $sendPhoneNumberToProvider);
        return $this;
    }

    /**
     * @param bool $sendEmailToProvider
     *
     * @return $this
     */
    public function sendEmailToProvider(bool $sendEmailToProvider): static {
        $this->addAttribute('send_email_to_provider', $sendEmailToProvider);
        return $this;
    }

    /**
     * @param bool $isFlexible
     *
     * @return $this
     */
    public function isFlexible(bool $isFlexible): static {
        $this->addAttribute('is_flexible', $isFlexible);
        return $this;
    }

    /**
     * @param bool $disableNotification
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param bool $allowPaidBroadcast
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * @param string $messageEffectId
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param SuggestedPostParameters $suggestedPostParameters
     *
     * @return $this
     */
    public function suggestedPostParameters(SuggestedPostParameters $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
        return $this;
    }

    /**
     * @param ReplyParameters $replyParameters
     *
     * @return $this
     */
    public function replyParameters(ReplyParameters $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
