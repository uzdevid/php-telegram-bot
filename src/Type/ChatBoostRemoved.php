<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostRemoved
 *
 * @link https://core.telegram.org/bots/api#chatboostremoved
 *
 * This object represents a boost removed from a chat.
 */
class ChatBoostRemoved extends Type {
    /**
     * @var Chat Chat which was boosted
     */
    public Chat $chat;

    /**
     * @var string Unique identifier of the boost
     */
    public string $boostId;

    /**
     * @var int Point in time (Unix timestamp) when the boost was removed
     */
    public int $removeDate;

    /**
     * @var ChatBoostSource Source of the removed boost
     */
    public ChatBoostSource $source;
}
