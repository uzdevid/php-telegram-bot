<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\objects\InlineQuery;

interface InlineQueryUpdateInterface {
    public static function canHandle(Bot $bot, InlineQuery $query): bool;

    public function handle(Bot $bot, InlineQuery $query): void;
}