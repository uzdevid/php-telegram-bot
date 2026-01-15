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
    /**
     * @var string Unique poll identifier
     */
    public string $pollId;

    /**
     * @var Chat|null Optional. The chat that changed the answer to the poll, if the voter is anonymous
     */
    public Chat|null $voterChat;

    /**
     * @var User|null Optional. The user that changed the answer to the poll, if the voter isn't anonymous
     */
    public User|null $user;

    /**
     * @var int[] 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     */
    public array $optionIds;
}
