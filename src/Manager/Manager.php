<?php

namespace UzDevid\Telegram\Bot\Manager;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use JsonException;
use UzDevid\Telegram\Bot\Core\Credentials;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Class Manager
 *
 * @package UzDevid\Telegram\Bot\Manager
 */
abstract class Manager {
    use Credentials;

    protected MethodInterface $method;

    /**
     * @param ClientInterface $httpClient
     */
    public function __construct(
        protected readonly ClientInterface $httpClient
    ) {
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
        $query = array_merge($this->getAttributes(), $this->method->getPayload(), $params);

        $url = sprintf($this->endpoint, $this->token, $this->method->methodName());

        $response = $this->httpClient->get($url, ['query' => $query]);

        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
    }
}