<?php

namespace uzdevid\telegram\bot\message\managers;

use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use uzdevid\telegram\bot\message\Manager;
use uzdevid\telegram\bot\message\ManagerInterface;
use uzdevid\telegram\bot\Service;

class Sender extends Manager implements ManagerInterface {
    public function methodUrl(): string {
        return self::$apiUrl . $this->token . '/' . $this->method->methodName();
    }

    /**
     * @return object
     * @throws GuzzleException
     * @throws JsonException
     */
    public function send(): object {
        if ($this->issetChatId() || $this->issetUsername()) {
            $query = array_merge(['chat_id' => $this->chatIdOrUsername()], $this->method->getPayload());
        } else {
            $query = $this->method->getPayload();
        }

        $response = $this->httpClient->get($this->methodUrl(), ['query' => $query]);

        $responseBody = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        return Service::buildResponse($responseBody, $this->method);
    }
}