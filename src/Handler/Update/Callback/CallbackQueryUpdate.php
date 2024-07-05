<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Callback;

use UzDevid\Telegram\Bot\Type\CallbackQuery;

/**
 * Class CallbackQueryUpdate
 */
final class CallbackQueryUpdate {
    public function __construct(
        public int           $updateId,
        public CallbackQuery $callbackQuery
    ) {
    }
}