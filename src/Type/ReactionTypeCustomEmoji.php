<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ReactionTypeCustomEmoji
 *
 * @link https://core.telegram.org/bots/api#reactiontypecustomemoji
 *
 * The reaction is based on a custom emoji.
 */
class ReactionTypeCustomEmoji extends Type {
    /**
     * @var string Type of the reaction, always “custom_emoji”
     */
    public string $type;

    /**
     * @var string Custom emoji identifier
     */
    public string $customEmojiId;
}
