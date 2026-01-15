<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostSource
 *
 * @link https://core.telegram.org/bots/api#chatboostsource
 *
 * This object describes the source of a chat boost. It can be one of
 */
class ChatBoostSource extends Type {
    /**
     * @var string Source of the boost, always “premium”
     */
    public string $source;

    /**
     * @var User User that boosted the chat
     */
    public User $user;
}
