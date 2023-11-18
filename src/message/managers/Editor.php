<?php

namespace uzdevid\telegram\bot\message\managers;

use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use uzdevid\telegram\bot\message\Manager;
use uzdevid\telegram\bot\message\ManagerInterface;
use uzdevid\telegram\bot\objects\Response;
use uzdevid\telegram\bot\Service;

/**
 *
 * @property int $messageId
 */
class Editor extends Manager implements ManagerInterface {
    private int|null $_messageId = null;

    /**
     * @param string|null $method
     *
     * @return string
     */
    public function methodUrl(string|null $method = null): string {
        return self::$apiUrl . $this->token . '/' . $method ?? $this->method->methodName();
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int {
        return $this->_messageId;
    }

    /**
     * @param int $messageId
     *
     * @return void
     */
    public function setMessageId(int $messageId): void {
        $this->_messageId = $messageId;
    }

    /**
     * @param int $messageId
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @return Response
     * @throws GuzzleException
     * @throws JsonException
     */
    public function edit(): object {
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