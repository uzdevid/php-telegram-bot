<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\objects\CallbackQuery;

interface CallbackQueryUpdateInterface {
    public static function canHandle(Bot $bot, CallbackQuery $query): bool;

    public function handle(Bot $bot, CallbackQuery $query): void;
}