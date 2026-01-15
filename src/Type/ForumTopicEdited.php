<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopicEdited
 *
 * @link https://core.telegram.org/bots/api#forumtopicedited
 *
 * This object represents a service message about an edited forum topic.
 */
class ForumTopicEdited extends Type {
    /**
     * @var string|null Optional. New name of the topic, if it was edited
     */
    public string|null $name;

    /**
     * @var string|null Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
     */
    public string|null $iconCustomEmojiId;
}
