<?php

namespace UzDevid\Telegram\Bot;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use UzDevid\Telegram\Bot\Exception\NotSupportedException;
use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Handler\Request\RequestInterface;

interface ServerInterface {
    /**
     * @param class-string<MessageHandlerInterface> $handlerClass
     *
     * @throws NotSupportedException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     *
     * @return ServerInterface
     */
    public function onMessage(string $handlerClass): ServerInterface;

    /**
     * @param class-string<CallbackQueryHandlerInterface> $handlerClass
     *
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     *
     * @return ServerInterface
     */
    public function onCallbackQuery(string $handlerClass): ServerInterface;

    /**
     * @param class-string<InlineQueryHandlerInterface> $handlerClass
     *
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     *
     * @return ServerInterface
     */
    public function onInlineQuery(string $handlerClass): ServerInterface;

    /**
     * @param class-string<RequestInterface> $handlerClass
     *
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     *
     * @return ServerInterface
     */
    public function onRequest(string $handlerClass): ServerInterface;
}
