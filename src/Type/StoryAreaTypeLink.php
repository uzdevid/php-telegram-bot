<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaTypeLink
 *
 * @link https://core.telegram.org/bots/api#storyareatypelink
 *
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 */
class StoryAreaTypeLink extends Type {
    /**
     * @var string Type of the area, always “link”
     */
    public string $type;

    /**
     * @var string HTTP or tg:// URL to be opened when the area is clicked
     */
    public string $url;
}
