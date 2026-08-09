<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;

interface CallbackQueryHandlerInterface {
    /**
     * @param CallbackQueryUpdate $query
     *
     * @return bool
     */
    public function canHandle(CallbackQueryUpdate $query): bool;

    /**
     * @param CallbackQueryUpdate $query
     *
     */
    public function handle(CallbackQueryUpdate $query): void;
}
