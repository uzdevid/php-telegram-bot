<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendContact extends Method implements MethodInterface {
    /**
     * @param string $phoneNumber
     */
    public function __construct(string $phoneNumber) {
        parent::__construct();
        $this->addAttribute('phone_number', $phoneNumber);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendContact";
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function firstName(string $firstName): static {
        $this->addAttribute('first_name', $firstName);
        return $this;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function lastName(string $lastName): static {
        $this->addAttribute('last_name', $lastName);
        return $this;
    }
}