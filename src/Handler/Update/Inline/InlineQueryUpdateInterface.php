<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Inline;

use UzDevid\Telegram\Bot\Type\InlineQueryUpdate;

interface InlineQueryUpdateInterface {
    /**
     * @param InlineQueryUpdate $query
     *
     * @return bool
     */
    public static function canHandle(InlineQueryUpdate $query): bool;

    /**
     * @param InlineQueryUpdate $query
     *
     * @return void
     */
    public function handle(InlineQueryUpdate $query): void;
}