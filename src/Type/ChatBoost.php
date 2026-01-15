<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoost
 *
 * @link https://core.telegram.org/bots/api#chatboost
 *
 * This object contains information about a chat boost.
 */
class ChatBoost extends Type {
    /**
     * @var string Unique identifier of the boost
     */
    public string $boostId;

    /**
     * @var int Point in time (Unix timestamp) when the chat was boosted
     */
    public int $addDate;

    /**
     * @var int Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
     */
    public int $expirationDate;

    /**
     * @var ChatBoostSource Source of the added boost
     */
    public ChatBoostSource $source;
}
