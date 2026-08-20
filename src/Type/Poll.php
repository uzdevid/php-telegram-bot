<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Poll
 *
 * @see https://core.telegram.org/bots/api#poll
 *
 * This object contains information about a poll.
 */
class Poll extends Type {
    /**
     * Unique poll identifier
     */
    public string $id;
    /**
     * Poll question, 1-300 characters
     */
    public string $question;
    /**
     * List of poll options
     */
    public PollOption $options;
    /**
     * Total number of users that voted in the poll
     */
    public int $totalVoterCount;
    /**
     * True, if the poll is closed
     */
    public bool $isClosed;
    /**
     * True, if the poll is anonymous
     */
    public bool $isAnonymous;
    /**
     * Poll type, currently can be “regular” or “quiz”
     */
    public string $type;
    /**
     * True, if the poll allows multiple answers
     */
    public bool $allowsMultipleAnswers;
    public int $correctOptionId;
    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style
     * poll, 0-200 characters
     */
    public string $explanation;
    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     */
    public MessageEntity $explanationEntities;
    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     */
    public int $openPeriod;
    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     */
    public int $closeDate;
}
