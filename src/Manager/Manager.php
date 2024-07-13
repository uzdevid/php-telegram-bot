<?php

namespace UzDevid\Telegram\Bot\Manager;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use JsonException;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Class Message
 *
 * @package UzDevid\Telegram\Bot\Manager
 *
 * @property-read string $url
 * @property-read array $params
 * @property MethodInterface $method
 */
abstract class Manager {
    protected readonly string $endpoint;
    protected readonly string $token;
    protected MethodInterface $method;
    protected array $params = [];

    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(
        protected readonly ClientInterface $httpClient
    ) {
    }

    /**
     * @param string $url
     * @return $this
     */
    public function endpoint(string $url): static {
        $this->endpoint = $url;
        return $this;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function token(string $token): static {
        $this->token = $token;
        return $this;
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
     * @param array $params
     * @return array|null
     * @throws JsonException
     * @throws GuzzleException|ServerException|ClientException
     */
    protected function sendRequest(array $params = []): array|null {
        $query = array_merge($this->params, $this->method->getPayload(), $params);

        $url = sprintf($this->endpoint, $this->token, $this->method->methodName());

        $response = $this->httpClient->get($url, ['query' => $query]);

        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }
}