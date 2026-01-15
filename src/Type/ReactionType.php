<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ReactionType
 *
 * @link https://core.telegram.org/bots/api#reactiontype
 *
 * This object describes the type of a reaction. Currently, it can be one of
 */
class ReactionType extends Type {
    /**
     * @var string Type of the reaction, always “emoji”
     */
    public string $type;

    /**
     * @var string Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""
     */
    public string $emoji;
}
