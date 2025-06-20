<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Poll
 *
 * @link https://core.telegram.org/bots/api#poll
 *
 * This object contains information about a poll.
 */
class Poll extends Type {

    public string $id;
    public string $question;
    public PollOption $options;
    public int $totalVoterCount;
    public bool $isClosed;
    public bool $isAnonymous;
    public string $type;
    public bool $allowsMultipleAnswers;
    public int $correctOptionId;
    public string $explanation;
    public MessageEntity $explanationEntities;
    public int $openPeriod;
    public int $closeDate;
}