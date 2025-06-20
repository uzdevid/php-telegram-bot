<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageAutoDeleteTimerChanged
 *
 * @link https://core.telegram.org/bots/api#messageautodeletetimerchanged
 *
 * This object represents a service message about a change in auto-delete timer settings.
 *
 * @property int $message_auto_delete_time
 */
class MessageAutoDeleteTimerChanged extends Type {
    public int $message_auto_delete_time;
}