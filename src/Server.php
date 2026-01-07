<?php declare(strict_types=1);

namespace UzDevid\Telegram\Bot;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use UzDevid\Telegram\Bot\Core\Helper;
use UzDevid\Telegram\Bot\Exception\NotSupportedException;
use UzDevid\Telegram\Bot\Handler\CallbackQueryHandlerInterface;
use UzDevid\Telegram\Bot\Handler\InlineQueryHandlerInterface;
use UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypeInterface;
use UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypesInterface;
use UzDevid\Telegram\Bot\Handler\MessageHandlerInterface;
use UzDevid\Telegram\Bot\Handler\Request\RequestInterface;
use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;
use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;
use UzDevid\Telegram\Bot\Update\MessageUpdate;
use Yiisoft\Hydrator\Hydrator;

final class Server implements ServerInterface {
    private array $payload;
    private bool $isHandled = false;

    /**
     * @param ContainerInterface $container
     * @param Hydrator $hydrator
     */
    public function __construct(
        private readonly ContainerInterface $container,
        private readonly Hydrator           $hydrator
    ) {
    }

    /**
     * @param array $payload
     * @return ServerInterface
     */
    public function withPayload(array $payload): ServerInterface {
        $new = clone $this;
        $new->payload = Helper::reformat($payload);
        return $new;
    }

    /**
     * @param class-string<MessageHandlerInterface> $handlerClass
     * @return ServerInterface
     * @throws NotSupportedException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onMessage(string $handlerClass): ServerInterface {
        if ($this->isHandled) return $this;

        if (!$this->match('message')) return $this;

        $type = $this->hydrator->create(MessageUpdate::class, $this->payload);

        if ($handlerClass instanceof FilterMessageTypeInterface && !$type->is(call_user_func([$handlerClass, 'allowedType']))) {
            return $this;
        }

        if ($handlerClass instanceof FilterMessageTypesInterface && !$type->isOneOf(call_user_func([$handlerClass, 'allowedTypes']))) {
            return $this;
        }

        /** @var MessageHandlerInterface $handler */
        $handler = $this->container->get($handlerClass);

        if (!$handler->canHandle($type)) {
            return $this;
        }

        $handler->handle($type);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param class-string<CallbackQueryHandlerInterface> $handlerClass
     * @return ServerInterface
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onCallbackQuery(string $handlerClass): ServerInterface {
        if ($this->isHandled) return $this;

        if (!$this->match('callbackQuery')) return $this;

        $type = $this->hydrator->create(CallbackQueryUpdate::class, $this->payload);

        /** @var CallbackQueryHandlerInterface $handler */
        $handler = $this->container->get($handlerClass);

        if (!$handler->canHandle($type)) {
            return $this;
        }

        $handler->handle($type);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param class-string<InlineQueryHandlerInterface> $handlerClass
     * @return ServerInterface
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onInlineQuery(string $handlerClass): ServerInterface {
        if ($this->isHandled) return $this;

        if (!$this->match('inlineQuery')) return $this;

        $type = $this->hydrator->create(InlineQueryUpdate::class, $this->payload);

        /** @var InlineQueryHandlerInterface $handler */
        $handler = $this->container->get($handlerClass);

        if (!$handler->canHandle($type)) {
            return $this;
        }

        $handler->handle($type);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param class-string<RequestInterface> $handlerClass
     * @return ServerInterface
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function onRequest(string $handlerClass): ServerInterface {
        if ($this->isHandled) return $this;

        $name = $handlerClass->getName();

        if (!$this->match($name)) return $this;

        $handlerClass->getRequestClass();

        $request = $this->hydrator->create($handlerClass->getRequestClass(), $this->payload);

        /** @var RequestInterface $handler */
        $handler = $this->container->get($handlerClass);

        $handler->setRequest($request);

        $handler->handle();

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param string $updateName
     * @return bool
     */
    private function match(string $updateName): bool {
        return array_key_exists($updateName, $this->payload);
    }
}