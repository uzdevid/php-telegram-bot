<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Message;


interface MessageUpdateInterface {
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