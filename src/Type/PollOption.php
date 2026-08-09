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
    public string $text;
    public int $voterCount;
}
