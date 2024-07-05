<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Handler\Update\Callback\CallbackQueryUpdate;
use uzdevid\telegram\Bot\Handler\Update\Callback\CallbackQueryUpdateInterface;
use UzDevid\Telegram\Bot\Handler\Update\Inline\InlineQueryUpdate;
use uzdevid\telegram\Bot\Handler\Update\Inline\InlineQueryUpdateInterface;
use UzDevid\Telegram\Bot\Handler\Update\Message\MessageUpdate;
use UzDevid\Telegram\Bot\Handler\Update\Message\MessageUpdateInterface;
use Yiisoft\Hydrator\Hydrator;

/**
 * Class Handler
 *
 * @package UzDevid\Telegram\Bot\Handler
 *
 * @property-write array $allowedInterfaces
 * @property-read string $handlersString
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
     */
    public function on(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): static {
        $updateName = $this->getUpdateName($handler);

        if (!$this->isHandled && !$this->match($updateName)) {
            return $this;
        }

        $updateClass = $this->getUpdate($handler);

        $update = $this->buildUpdate($updateClass);

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