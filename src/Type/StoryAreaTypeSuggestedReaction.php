<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaTypeSuggestedReaction
 *
 * @link https://core.telegram.org/bots/api#storyareatypesuggestedreaction
 *
 * Describes a story area pointing to a suggested reaction. Currently, a story can have up to 5 suggested reaction areas.
 */
class StoryAreaTypeSuggestedReaction extends Type {
    /**
     * @var string Type of the area, always “suggested_reaction”
     */
    public string $type;

    /**
     * @var ReactionType Type of the reaction
     */
    public ReactionType $reactionType;

    /**
     * @var bool|null Optional. Pass True if the reaction area has a dark background
     */
    public bool|null $isDark;

    /**
     * @var bool|null Optional. Pass True if reaction area corner is flipped
     */
    public bool|null $isFlipped;
}
