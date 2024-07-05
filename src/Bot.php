<?php

namespace UzDevid\Telegram\Bot;

use GuzzleHttp\Client;
use UzDevid\Telegram\Bot\Core\PayloadFormatter;
use UzDevid\Telegram\Bot\Handler\Handler;
use UzDevid\Telegram\Bot\Message\Manager\Editor;
use UzDevid\Telegram\Bot\Message\Manager\Sender;

/**
 * Class Bot
 *
 * @package UzDevid\Telegram\Bot
 */
class Bot {
    protected const ENDPOINT = 'https://api.telegram.org/bot';
    public readonly Handler $handler;
    private Sender $sender;
    private Editor $editor;

    /**
     * @param string $token
     */
    public function __construct(string $token) {
        $client = new Client(['base_uri' => self::ENDPOINT . $token]);

        $this->sender = new Sender($client);
        $this->editor = new Editor($client);
    }

    /**
     * @param array $payload
     *
     * @return Handler
     */
    public function handler(array $payload): Handler {
        $reformattedPayload = PayloadFormatter::reformat($payload);
        return new Handler($reformattedPayload);
    }
}