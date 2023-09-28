<?php

namespace uzdevid\telegram\bot\message\managers;

use GuzzleHttp\Exception\GuzzleException;
use uzdevid\telegram\bot\message\Manager;
use uzdevid\telegram\bot\message\ManagerInterface;
use uzdevid\telegram\bot\objects\Response;
use uzdevid\telegram\bot\Service;

class Sender extends Manager implements ManagerInterface {
    public function methodUrl(): string {
        return self::$apiUrl . $this->token . '/' . $this->method->methodName();
    }

    /**
     * @throws GuzzleException
     */
    public function send(): Response {
        $query = array_merge(['chat_id' => $this->chatIdOrUsername()], $this->method->getPayload());

        $response = $this->httpClient->get($this->methodUrl(), ['query' => $query]);

        $responseBody = json_decode($response->getBody()->getContents(), true);

        return Service::buildResponse($responseBody);
    }
}