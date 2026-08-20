<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PollOption
 *
 * @see https://core.telegram.org/bots/api#polloption
 *
 * This object contains information about one answer option in a poll.
 */
class PollOption extends Type {
    /**
     * Option text, 1-100 characters
     */
    public string $text;
    /**
     * Number of users who voted for this option; may be 0 if unknown
     */
    public int $voterCount;
}
