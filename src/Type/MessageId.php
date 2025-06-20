<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageId
 *
 * @link https://core.telegram.org/bots/api#messageid
 */
class MessageId extends Type {
    public int $messageId;
}