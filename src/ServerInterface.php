<?php

namespace UzDevid\Telegram\Bot;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use UzDevid\Telegram\Bot\Exception\NotSupportedException;
use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Handler\RequestInterface;

interface ServerInterface {
    /**
     * @param class-string<MessageHandlerInterface> $handlerClass
     * @return ServerInterface
     * @throws NotSupportedException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onMessage(string $handlerClass): ServerInterface;

    /**
     * @param class-string<CallbackQueryHandlerInterface> $handlerClass
     * @return ServerInterface
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onCallbackQuery(string $handlerClass): ServerInterface;

    /**
     * @param class-string<InlineQueryHandlerInterface> $handlerClass
     * @return ServerInterface
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onInlineQuery(string $handlerClass): ServerInterface;

    /**
     * @param class-string<RequestInterface> $handlerClass
     * @return ServerInterface
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onRequest(string $handlerClass): ServerInterface;
}