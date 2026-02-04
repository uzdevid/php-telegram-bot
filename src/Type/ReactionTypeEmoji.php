<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ReactionTypeEmoji
 *
 * @link https://core.telegram.org/bots/api#reactiontypeemoji
 *
 * The reaction is based on an emoji.
 */
class ReactionTypeEmoji extends Type {
    /**
     * @var string Type of the reaction, always “emoji”
     */
    public string $type;

    /**
     * @var string Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""
     */
    public string $emoji;
}