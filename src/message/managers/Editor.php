<?php

namespace uzdevid\telegram\bot\message\managers;

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
     * @return void
     */
    public function edit() { }

    /**
     * @return Response
     */
    public function delete(): Response {
        $query = ['chat_id' => $this->chatIdOrUsername(), 'message_id' => $this->messageId];

        $options = ['query' => $query];

        $response = $this->httpClient->get($this->methodUrl('deleteMessage'), $options);

        $responseBody = json_decode($response->getBody()->getContents(), true);

        return Service::buildResponse($responseBody);
    }
}