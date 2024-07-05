<?php

namespace UzDevid\Telegram\Bot\Message\Manager;

use GuzzleHttp\Exception\GuzzleException;
use UzDevid\Telegram\Bot\Message\Manager;
use UzDevid\Telegram\Bot\Service;

class Sender extends Manager {
    /**
     * @return object
     * @throws GuzzleException
     */
    public function send(): object {
        return Service::buildResponse($this->sendRequest(), $this->method);
    }
}