<?php

namespace UzDevid\Telegram\Bot\Manager;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use JsonException;
use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Exception\MissedAttributesException;

final class Editor extends Manager implements EditorInterface {
    use AttributeContainer;

    /**
     * @param int $messageId
     * @return EditorInterface
     */
    public function messageId(int $messageId): EditorInterface {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * @return object
     * @throws JsonException
     * @throws MissedAttributesException
     * @throws GuzzleException|ServerException|ClientException
     */
    public function edit(): object {
        if (!$this->hasAttribute('message_id')) {
            throw new MissedAttributesException('Attribute `messageId` must be set');
        }

        $response = $this->sendRequest($this->getAttributes());

        return $this->method->response($response);
    }
}