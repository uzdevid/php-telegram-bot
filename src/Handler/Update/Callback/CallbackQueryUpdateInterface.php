<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Callback;

interface CallbackQueryUpdateInterface {
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