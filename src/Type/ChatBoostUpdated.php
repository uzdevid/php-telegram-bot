<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostUpdated
 *
 * @link https://core.telegram.org/bots/api#chatboostupdated
 *
 * This object represents a boost added to a chat or changed.
 */
class ChatBoostUpdated extends Type {
    /**
     * @var Chat Chat which was boosted
     */
    public Chat $chat;

    /**
     * @var ChatBoost Information about the chat boost
     */
    public ChatBoost $boost;
}
