<?php

namespace UzDevid\Telegram\Bot\Manager;

use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use UzDevid\Telegram\Bot\Core\Service;

final class Sender extends Manager implements SenderInterface {
    /**
     * @return object
     * @throws JsonException
     * @throws GuzzleException
     */
    public function send(): mixed {
        $response = Service::reformat($this->sendRequest());

        return $this->method->response($response);
    }
}