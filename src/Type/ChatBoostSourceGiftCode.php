<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostSourceGiftCode
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcegiftcode
 *
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
class ChatBoostSourceGiftCode extends Type {
    /**
     * @var string Source of the boost, always “gift_code”
     */
    public string $source;

    /**
     * @var User User for which the gift code was created
     */
    public User $user;
}
