<?php declare(strict_types=1);

namespace UzDevid\Telegram\Bot\Config;

readonly class ClientConfig {
    /**
     * @param string $token
     * @param string $endpoint
     */
    public function __construct(
        private string $token,
        private string $endpoint = 'https://api.telegram.org/bot%s/%s'
    ) {
    }

    /**
     * @return string
     */
    public function getToken(): string {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string {
        return $this->endpoint;
    }
}