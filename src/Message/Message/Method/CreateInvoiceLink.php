<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method CreateInvoiceLink
 *
 * Use this method to create a link for an invoice. Returns the created invoice link as String on success.
 */
class CreateInvoiceLink extends Method implements MethodInterface {
    public function __construct(string $title, string $description, string $payload, string $currency, array $prices) {
        parent::__construct();
        $this->addAttribute('title', $title);
        $this->addAttribute('description', $description);
        $this->addAttribute('payload', $payload);
        $this->addAttribute('currency', $currency);
        $this->addAttribute('prices', $prices);
    }

    public function methodName(): string {
        return "createInvoiceLink";
    }

    /**
     * @param string $businessConnectionId
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
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
     * @param int $subscriptionPeriod
     *
     * @return $this
     */
    public function subscriptionPeriod(int $subscriptionPeriod): static {
        $this->addAttribute('subscription_period', $subscriptionPeriod);
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
}
