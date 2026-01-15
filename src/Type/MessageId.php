<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageId
 *
 * @link https://core.telegram.org/bots/api#messageid
 *
 * This object represents a unique message identifier.
 */
class MessageId extends Type {
    /**
     * @var int Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     */
    public int $messageId;
}
