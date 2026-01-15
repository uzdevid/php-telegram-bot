<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaTypeUniqueGift
 *
 * @link https://core.telegram.org/bots/api#storyareatypeuniquegift
 *
 * Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
 */
class StoryAreaTypeUniqueGift extends Type {
    /**
     * @var string Type of the area, always “unique_gift”
     */
    public string $type;

    /**
     * @var string Unique name of the gift
     */
    public string $name;
}
