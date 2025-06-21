<?php

namespace UzDevid\Telegram\Bot;

use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

interface ClientInterface {
    /**
     * @param int $chatId
     * @return ClientInterface
     */
    public function withChatId(int $chatId): ClientInterface;

    /**
     * @param int $messageId
     * @return ClientInterface
     */
    public function withMessageId(int $messageId): ClientInterface;

    /**
     * @param MethodInterface $method
     * @return ClientInterface
     */
    public function withMethod(MethodInterface $method): ClientInterface;

    /**
     * @return mixed
     */
    public function send(): mixed;

    /**
     * @return mixed
     */
    public function edit(): mixed;
}