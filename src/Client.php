<?php

namespace UzDevid\Telegram\Bot;

use GuzzleHttp\ClientInterface as HttpClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use UzDevid\Telegram\Bot\Config\ClientConfig;
use UzDevid\Telegram\Bot\Core\Helper;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Class Bot
 *
 * @package UzDevid\Telegram\Bot
 */
readonly class Client implements ClientInterface {
    private int $chatId;
    private int $messageId;
    private MethodInterface $method;

    /**
     * @param ClientConfig $config
     * @param HttpClientInterface $client
     */
    public function __construct(
        private ClientConfig        $config,
        private HttpClientInterface $client
    ) {
    }

    public function withChatId(int $chatId): ClientInterface {
        $new = clone $this;
        $new->chatId = $chatId;
        return $new;
    }

    public function withMessageId(int $messageId): ClientInterface {
        $new = clone $this;
        $new->messageId = $messageId;
        return $new;
    }

    public function withMethod(MethodInterface $method): ClientInterface {
        $new = clone $this;
        $new->method = $method;
        return $new;
    }

    /**
     * @return mixed
     * @throws GuzzleException
     * @throws JsonException
     */
    public function send(): mixed {
        $params = [];

        if (isset($this->chatId)) {
            $params['chat_id'] = $this->chatId;
        }

        return $this->sendRequest($params);
    }

    /**
     * @return mixed
     * @throws GuzzleException
     * @throws JsonException
     */
    public function edit(): mixed {
        $params = [];

        if (isset($this->chatId)) {
            $params['chat_id'] = $this->chatId;
        }

        if (isset($this->messageId)) {
            $params['message_id'] = $this->messageId;
        }

        return $this->sendRequest($params);
    }

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function sendRequest(array $params) {
        $payload = array_merge($params, $this->method->getPayload());

        $url = sprintf($this->config->getEndpoint(), $this->config->getToken(), $this->method->methodName());

        $response = $this->client->post($url, [
            'json' => $payload,
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $response = Helper::reformat($data);

        return $this->method->response($response);
    }
}