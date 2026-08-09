<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Update\MessageUpdate;

interface MessageHandlerInterface {
    /**
     * @param MessageUpdate $update
     *
     * @return bool
     */
    public function canHandle(MessageUpdate $update): bool;

    /**
     * @param MessageUpdate $update
     *
     */
    public function handle(MessageUpdate $update): void;
}
