<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Exception\NotSupportedException;
use UzDevid\Telegram\Bot\Handler\Callback\CallbackQueryUpdateInterface;
use UzDevid\Telegram\Bot\Handler\Inline\InlineQueryUpdateInterface;
use UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypeInterface;
use UzDevid\Telegram\Bot\Handler\Message\FilterMessageTypesInterface;
use UzDevid\Telegram\Bot\Handler\Message\MessageUpdateInterface;
use UzDevid\Telegram\Bot\Type\CallbackQueryUpdate;
use UzDevid\Telegram\Bot\Type\InlineQueryUpdate;
use UzDevid\Telegram\Bot\Type\MessageUpdate;
use Yiisoft\Hydrator\Hydrator;

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
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     *
     * @return $this
     * @throws NotSupportedException
     */
    public function on(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): static {
        if ($this->isHandled) return $this;

        $updateName = $this->getUpdateName($handler);

        if (!$this->match($updateName)) return $this;

        $updateClass = $this->getUpdate($handler);

        $update = $this->buildUpdate($updateClass);

        if ($handler instanceof FilterMessageTypeInterface && $update instanceof MessageUpdate && !$update->is($handler->allowedType())) {
            return $this;
        }

        if ($handler instanceof FilterMessageTypesInterface && $update instanceof MessageUpdate && !$update->isOneOf($handler->allowedTypes())) {
            return $this;
        }

        if (!$handler->canHandle($update)) {
            return $this;
        }

        $handler->handle($update);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @param string $updateClass
     *
     * @return MessageUpdate|CallbackQueryUpdate|InlineQueryUpdate
     */
    protected function buildUpdate(string $updateClass): InlineQueryUpdate|MessageUpdate|CallbackQueryUpdate {
        return (new Hydrator())->create($updateClass, $this->payload);
    }

    /**
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     *
     * @return string
     */
    protected function getUpdateName(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): string {
        return match (true) {
            $handler instanceof MessageUpdateInterface => 'message',
            $handler instanceof CallbackQueryUpdateInterface => 'callbackQuery',
            $handler instanceof InlineQueryUpdateInterface => 'inlineQuery',
        };
    }

    /**
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     *
     * @return string
     */
    protected function getUpdate(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): string {
        return match (true) {
            $handler instanceof MessageUpdateInterface => MessageUpdate::class,
            $handler instanceof CallbackQueryUpdateInterface => CallbackQueryUpdate::class,
            $handler instanceof InlineQueryUpdateInterface => InlineQueryUpdate::class,
        };
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