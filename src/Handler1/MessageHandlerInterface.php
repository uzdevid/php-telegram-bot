<?php

namespace UzDevid\Telegram\Bot\Handler1;

use UzDevid\Telegram\Bot\Update\MessageUpdate;

interface MessageHandlerInterface {
    /**
     * @param MessageUpdate $update
     *
     * @return bool
     */
    public static function canHandle(MessageUpdate $update): bool;

    /**
     * @param MessageUpdate $update
     *
     * @return void
     */
    public function handle(MessageUpdate $update): void;
}