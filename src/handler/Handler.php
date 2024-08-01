<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\exceptions\InvalidCallException;
use uzdevid\telegram\bot\objects\CallbackQuery;
use uzdevid\telegram\bot\objects\InlineQuery;
use uzdevid\telegram\bot\objects\Message;

class Handler {
    protected Bot $botInstance;
    protected array $data = [];
    private bool $isHandled = false;

    public function __construct(Bot $botInstance, array $data) {
        $this->botInstance = $botInstance;
        $this->data = $data;
    }

    public function on(string $handlerClassName): static {
        if (!(
            is_subclass_of($handlerClassName, MessageUpdateInterface::class) ||
            is_subclass_of($handlerClassName, CallbackQueryUpdateInterface::class) ||
            is_subclass_of($handlerClassName, InlineQueryUpdateInterface::class) ||
            is_subclass_of($handlerClassName, RequestInterface::class)
        )) {
            throw new InvalidCallException('Update class must be instance of ' . MessageUpdateInterface::class . ' or ' . CallbackQueryUpdateInterface::class . ' or ' . InlineQueryUpdateInterface::class . ' or ' . RequestInterface::class . ' interface');
        }

        if (!$this->matchedUpdate($handlerClassName)) {
            return $this;
        }

        /** @var UpdateInterface|RequestInterface $update */
        $update = new $handlerClassName($this->data);

        if (!$this->canHandle($update, $update->body())) {
            return $this;
        }

        call_user_func([$update, 'handle'], $this->botInstance, $update->body());
        $this->isHandled = true;

        return $this;
    }

    protected function matchedUpdate(string $updateClassName): bool {
        $objectName = call_user_func([$updateClassName, 'objectName']);
        return !$this->isHandled && $this->match($objectName, $this->data);
    }

    protected function canHandle(UpdateInterface $update, Message|CallbackQuery|InlineQuery $body): bool {
        return call_user_func([$update, 'canHandle'], $this->botInstance, $body);
    }

    protected function match(string $objectName, array $data): bool {
        return array_key_exists($objectName, $data);
    }
}