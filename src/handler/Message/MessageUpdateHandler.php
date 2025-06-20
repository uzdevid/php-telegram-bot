<?php

namespace UzDevid\Telegram\Bot\Handler\Message;

use UzDevid\Telegram\Bot\Update\MessageUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class MessageUpdateHandler {
    /**
     * @return string
     */
    public function getName(): string {
        return 'message';
    }

    /**
     * @param array $payload
     * @return MessageUpdate
     */
    public function getType(array $payload): MessageUpdate {
        return (new Hydrator())->create(MessageUpdate::class, $payload);
    }

    /**
     * @param MessageUpdate $update
     *
     * @return bool
     */
    abstract public static function canHandle(MessageUpdate $update): bool;

    /**
     * @param MessageUpdate $update
     *
     * @return void
     */
    abstract public function handle(MessageUpdate $update): void;
}