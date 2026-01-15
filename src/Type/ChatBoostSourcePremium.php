<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostSourcePremium
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcepremium
 *
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
class ChatBoostSourcePremium extends Type {
    /**
     * @var string Source of the boost, always “premium”
     */
    public string $source;

    /**
     * @var User User that boosted the chat
     */
    public User $user;
}
