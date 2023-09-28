<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Poll
 *
 * @link https://core.telegram.org/bots/api#poll
 *
 * This object contains information about a poll.
 *
 * @property string $id
 * @property string $question
 * @property PollOption[] $options
 * @property int $totalVoterCount
 * @property bool $isClosed
 * @property bool $isAnonymous
 * @property string $type
 * @property bool $allowsMultipleAnswers
 * @property int $correctOptionId
 * @property string $explanation
 * @property MessageEntity[] $explanationEntities
 * @property int $openPeriod
 * @property int $closeDate
 */
class Poll extends BaseObject { }