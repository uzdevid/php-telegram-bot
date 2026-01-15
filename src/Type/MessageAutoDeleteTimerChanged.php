<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageAutoDeleteTimerChanged
 *
 * @link https://core.telegram.org/bots/api#messageautodeletetimerchanged
 *
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged extends Type {
    /**
     * @var int New auto-delete time for messages in the chat; in seconds
     */
    public int $messageAutoDeleteTime;
}
