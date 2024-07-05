<?php

namespace UzDevid\Telegram\Bot\Message;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Class Message
 *
 * @package UzDevid\Telegram\Bot
 *
 * @property-read string $url
 * @property-read array $params
 * @property MethodInterface $method
 */
abstract class Manager {
    protected MethodInterface $method;
    protected array $params = [];

    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(
        protected ClientInterface $httpClient
    ) {
    }

    /**
     * @param string|int $chatId
     *
     * @return $this
     */
    public function chatId(string|int $chatId): static {
        $this->params['chat_id'] = $chatId;
        return $this;
    }

    /**
     * @param MethodInterface $method
     *
     * @return Manager
     */
    public function method(MethodInterface $method): static {
        $this->method = $method;
        return $this;
    }

    /**
     * @return array|null
     * @throws GuzzleException
     */
    protected function sendRequest(): array|null {
        $query = array_merge($this->params, $this->method->getPayload());

        $response = $this->httpClient->get($this->method->methodName(), ['query' => $query]);

        return json_decode($response->getBody()->getContents(),  true);
    }
}