<?php

namespace UzDevid\Telegram\Bot;

use UzDevid\Telegram\Bot\Core\Service;
use UzDevid\Telegram\Bot\Handler\Handler;
use UzDevid\Telegram\Bot\Manager\SenderInterface;
use UzDevid\Telegram\Bot\Scenario\Scenario;

/**
 * Class Bot
 *
 * @package UzDevid\Telegram\Bot
 */
readonly class Bot {
    /**
     * @param string $token
     * @param string $endpoint
     */
    public function __construct(
        private string $token,
        public string  $endpoint = 'https://api.telegram.org/bot%s/%s'
    ) {
    }

    /**
     * @param array $payload
     * @return Handler
     */
    public function handler(array $payload): Handler {
        $reformattedPayload = Service::reformat($payload);
        return new Handler($reformattedPayload);
    }

    /**
     * @param array $payload
     * @return Scenario
     */
    public function scenario(array $payload): Scenario {
        $reformattedPayload = Service::reformat($payload);
        return new Scenario($payload);
    }

    /**
     * @param SenderInterface $sender
     * @return SenderInterface
     */
    public function sender(SenderInterface $sender): SenderInterface {
        return $sender->endpoint($this->endpoint)->token($this->token);
    }
}