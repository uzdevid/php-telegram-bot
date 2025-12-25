<?php

namespace UzDevid\Telegram\Bot\Handler1;

use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;

interface InlineQueryHandlerInterface {
    /**
     * @param InlineQueryUpdate $update
     *
     * @return bool
     */
    public static function canHandle(InlineQueryUpdate $update): bool;

    /**
     * @param InlineQueryUpdate $update
     *
     * @return void
     */
    public function handle(InlineQueryUpdate $update): void;
}