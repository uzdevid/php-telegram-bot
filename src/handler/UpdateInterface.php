<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\objects\CallbackQuery;
use uzdevid\telegram\bot\objects\InlineQuery;
use uzdevid\telegram\bot\objects\Message;

interface UpdateInterface {
    public static function objectName(): string;

    public function body(): Message|CallbackQuery|InlineQuery;

    public function makeObjects(): array;
}