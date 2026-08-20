<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PollAnswer
 *
 * @see https://core.telegram.org/bots/api#pollanswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends Type {
    /**
     * Unique poll identifier
     */
    public string $pollId;
    /**
     * Optional. The chat that changed the answer to the poll, if the voter is anonymous
     */
    public Chat $voterChat;
    /**
     * Optional. The user that changed the answer to the poll, if the voter isn't anonymous
     */
    public User $user;
    /**
     * 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     */
    public array $optionIds;
}
