<?php

namespace UzDevid\Telegram\Bot\Handler\Callback;

use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class CallbackQueryHandler {
    /**
     * @return string
     */
    public function getName(): string {
        return 'callbackQuery';
    }

    /**
     * @param array $payload
     * @return CallbackQueryUpdate
     */
    public function getType(array $payload): CallbackQueryUpdate {
        return (new Hydrator())->create(CallbackQueryUpdate::class, $payload);
    }

    /**
     * @param CallbackQueryUpdate $update
     *
     * @return bool
     */
    abstract public static function canHandle(CallbackQueryUpdate $update): bool;

    /**
     * @param CallbackQueryUpdate $update
     *
     * @return void
     */
    abstract public function handle(CallbackQueryUpdate $update): void;
}