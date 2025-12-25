<?php

namespace UzDevid\Telegram\Bot\Handler1;

use UzDevid\Telegram\Bot\Update\CallbackQueryUpdate;

interface CallbackQueryHandlerInterface {
    /**
     * @param CallbackQueryUpdate $query
     *
     * @return bool
     */
    public static function canHandle(CallbackQueryUpdate $query): bool;

    /**
     * @param CallbackQueryUpdate $query
     *
     * @return void
     */
    public function handle(CallbackQueryUpdate $query): void;
}