<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ReactionCount
 *
 * @link https://core.telegram.org/bots/api#reactioncount
 *
 * Represents a reaction added to a message along with the number of times it was added.
 */
class ReactionCount extends Type {
    /**
     * @var ReactionType Type of the reaction
     */
    public ReactionType $type;

    /**
     * @var int Number of times the reaction was added
     */
    public int $totalCount;
}
