<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Exception\NotSupportedException;
use UzDevid\Telegram\Bot\Handler\Callback\CallbackQueryHandler;
use UzDevid\Telegram\Bot\Handler\Inline\InlineQueryUpdateHandler;
use UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypeInterface;
use UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypesInterface;
use UzDevid\Telegram\Bot\Handler\Message\MessageUpdateHandler;
use UzDevid\Telegram\Bot\Handler\Request\RequestInterface;

/**
 * Class Handler
 *
 * @package UzDevid\Telegram\Bot\Handler
 */
class Handler {
    private bool $isHandled = false;

    /**
     * @param array $payload
     */
    public function __construct(
        private readonly array $payload
    ) {
    }

    /**
     * @param MessageUpdateHandler $handler
     * @return Handler
     * @throws NotSupportedException
     */
    public function onMessage(MessageUpdateHandler $handler): static {
        if ($this->isHandled) return $this;

        $name = $handler->getName();

        if (!$this->match($name)) return $this;

        $type = $handler->getType($this->payload);

        if ($handler instanceof FilterMessageTypeInterface && !$type->is($handler->allowedType())) {
            return $this;
        }

        if ($handler instanceof FilterMessageTypesInterface && !$type->isOneOf($handler->allowedTypes())) {
            return $this;
        }

        if (!$handler->canHandle($type)) {
            return $this;
        }

        $handler->handle($type);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param CallbackQueryHandler $handler
     * @return $this
     */
    public function onCallbackQuery(CallbackQueryHandler $handler): static {
        if ($this->isHandled) return $this;

        $name = $handler->getName();

        if (!$this->match($name)) return $this;

        $type = $handler->getType($this->payload);

        if (!$handler->canHandle($type)) {
            return $this;
        }

        $handler->handle($type);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param InlineQueryUpdateHandler $handler
     * @return $this
     */
    public function onInlineQuery(InlineQueryUpdateHandler $handler): static {
        if ($this->isHandled) return $this;

        $name = $handler->getName();

        if (!$this->match($name)) return $this;

        $type = $handler->getType($this->payload);

        if (!$handler->canHandle($type)) {
            return $this;
        }

        $handler->handle($type);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param RequestInterface $handler
     * @return $this
     */
    public function onRequest(RequestInterface $handler): static {
        if ($this->isHandled) return $this;

        $name = $handler->getName();

        if (!$this->match($name)) return $this;

        $handler->buildRequest($this->payload);

        $handler->handle();

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param string $updateName
     *
     * @return bool
     */
    protected function match(string $updateName): bool {
        return array_key_exists($updateName, $this->payload);
    }
}