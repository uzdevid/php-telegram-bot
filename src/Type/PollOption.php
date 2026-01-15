<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PollOption
 *
 * @link https://core.telegram.org/bots/api#polloption
 *
 * This object contains information about one answer option in a poll.
 */
class PollOption extends Type {
    /**
     * @var string Option text, 1-100 characters
     */
    public string $text;

    /**
     * @var MessageEntity[]|null Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
     */
    public array|null $textEntities;

    /**
     * @var int Number of users that voted for this option
     */
    public int $voterCount;
}
