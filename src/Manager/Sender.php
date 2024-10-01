<?php

namespace UzDevid\Telegram\Bot\Manager;

use GuzzleHttp\Exception\GuzzleException;
use JsonException;

final class Sender extends Manager implements SenderInterface {
    /**
     * @return object
     * @throws JsonException
     * @throws GuzzleException
     */
    public function send(): mixed {
        $response = $this->sendRequest();

        return $this->method->response($response);
    }
}