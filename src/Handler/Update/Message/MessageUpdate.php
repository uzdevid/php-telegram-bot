<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Message;

use UzDevid\Telegram\Bot\Type\Message;

/**
 * Class MessageUpdate
 */
final class MessageUpdate {
    public function __construct(
        public int     $updateId,
        public Message $message
    ) {
    }
}