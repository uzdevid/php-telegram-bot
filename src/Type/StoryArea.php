<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryArea
 *
 * @link https://core.telegram.org/bots/api#storyarea
 *
 * Describes a clickable area on a story media.
 */
class StoryArea extends Type {
    /**
     * @var StoryAreaPosition Position of the area
     */
    public StoryAreaPosition $position;

    /**
     * @var StoryAreaType Type of the area
     */
    public StoryAreaType $type;
}
