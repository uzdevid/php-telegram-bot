<?php

namespace UzDevid\Telegram\Bot\Manager;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use JsonException;
use UzDevid\Telegram\Bot\Exception\MissedAttributesException;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

interface EditorInterface {
    /**
     * @param string $url
     * @return $this
     */
    public function endpoint(string $url): static;

    /**
     * @param string $token
     * @return static
     */
    public function token(string $token): static;

    /**
     * @param int $messageId
     * @return EditorInterface
     */
    public function messageId(int $messageId): EditorInterface;

    /**
     * @param MethodInterface $method
     * @return $this
     */
    public function method(MethodInterface $method): static;

    /**
     * @return object
     * @throws JsonException
     * @throws MissedAttributesException
     * @throws GuzzleException|ServerException|ClientException
     */
    public function edit(): object;
}