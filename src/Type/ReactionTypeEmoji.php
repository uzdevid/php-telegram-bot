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
     * @param string $type Type of the reaction, always “emoji”
     * @param string $emoji Reaction emoji.
     */
    public function __construct(
        public string $type,
        public string $emoji
    ) {
    }
}