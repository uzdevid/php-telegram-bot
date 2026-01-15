<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostAdded
 *
 * @link https://core.telegram.org/bots/api#chatboostadded
 *
 * This object represents a service message about a user boosting a chat.
 */
class ChatBoostAdded extends Type {
    /**
     * @var int Number of boosts added by the user
     */
    public int $boostCount;
}
