<?php

namespace UzDevid\Telegram\Bot\Handler\Callback;

use UzDevid\Telegram\Bot\Type\CallbackQueryUpdate;

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