<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendVenue extends Method implements MethodInterface {
    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(float $latitude, float $longitude) {
        parent::__construct();
        $this->addAttribute('latitude', $latitude);
        $this->addAttribute('longitude', $longitude);
    }

    public function methodName(): string {
        return 'sendVenue';
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
     * @param string $address
     * @return $this
     */
    public function address(string $address): static {
        $this->addAttribute('address', $address);
        return $this;
    }
}