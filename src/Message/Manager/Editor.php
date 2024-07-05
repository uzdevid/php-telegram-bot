<?php

namespace UzDevid\Telegram\Bot\Message\Manager;

use GuzzleHttp\Exception\GuzzleException;
use UzDevid\Telegram\Bot\Message\Manager;
use UzDevid\Telegram\Bot\Service;

/**
 *
 * @property int $messageId
 */
class Editor extends Manager {
    private int|null $_messageId = null;

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
     * @return object
     * @throws GuzzleException
     */
    public function edit(): object {
        return Service::buildResponse($this->sendRequest(), $this->method);
    }
}