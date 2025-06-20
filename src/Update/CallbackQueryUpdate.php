<?php

namespace UzDevid\Telegram\Bot\Update;

use UzDevid\Telegram\Bot\Type\CallbackQuery;

/**
 * Class CallbackQueryUpdate
 */
final class CallbackQueryUpdate {
    public int $updateId;
    public CallbackQuery $callbackQuery;
}