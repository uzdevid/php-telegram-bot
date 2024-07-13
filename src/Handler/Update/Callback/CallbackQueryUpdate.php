<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Callback;

use UzDevid\Telegram\Bot\Type\CallbackQuery;

/**
 * Class CallbackQueryUpdate
 */
final class CallbackQueryUpdate {
    /**
     * @param int $updateId
     * @param CallbackQuery $callbackQuery
     */
    public function __construct(
        public int           $updateId,
        public CallbackQuery $callbackQuery
    ) {
    }
}