<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\LabeledPrice;
use yii\helpers\Json;

class SendInvoice extends Method implements MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string {
        return 'sendInvoice';
    }

    /**
     * @param string $title
     * @return $this
     */
    public function title(string $title): static {
        $this->addAttribute('title', $title);
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function description(string $description): static {
        $this->addAttribute('description', $description);
        return $this;
    }

    /**
     * @param string $payload
     * @return $this
     */
    public function payload(string $payload): static {
        $this->addAttribute('payload', $payload);
        return $this;
    }

    /**
     * @param string $providerToken
     * @return $this
     */
    public function providerToken(string $providerToken): static {
        $this->addAttribute('provider_token', $providerToken);
        return $this;
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function currency(string $currency): static {
        $this->addAttribute('currency', $currency);
        return $this;
    }

    /**
     * @param LabeledPrice $price
     * @return $this
     */
    public function addPrice(LabeledPrice $price): static {
        $this->pushAttribute('prices', $price);
        return $this;
    }

    /**
     * @return array
     */
    public function getPayload(): array {
        $payload = parent::getPayload();

        $payload['prices'] = json_encode($payload['prices'], JSON_UNESCAPED_UNICODE);

        return $payload;
    }
}