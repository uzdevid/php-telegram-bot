<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard;

use JsonException;
use JsonSerializable;

/**
 * Reply markup objects are sent to Telegram as a JSON-serialized object. Implementing
 * JsonSerializable ensures the correct structure is produced whether the instance is
 * passed directly as `reply_markup` (serialized as part of the outer request payload)
 * or cast to string manually.
 */
interface ReplyMarkupInterface extends JsonSerializable {
    /**
     * @throws JsonException
     *
     * @return string
     */
    public function __toString(): string;
}
