<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PollAnswer
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends Type {
    public string $pollId;
    public Chat $voterChat;
    public User $user;
    public array $optionIds;
}