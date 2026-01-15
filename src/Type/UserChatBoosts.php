<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UserChatBoosts
 *
 * @link https://core.telegram.org/bots/api#userchatboosts
 *
 * This object represents a list of boosts added to a chat by a user.
 */
class UserChatBoosts extends Type {
    /**
     * @var ChatBoost[] The list of boosts added to the chat by the user
     */
    public array $boosts;
}
