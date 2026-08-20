<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopicEdited
 *
 * @see https://core.telegram.org/bots/api#forumtopicedited
 *
 * This object represents a service message about an edited forum topic.
 */
class ForumTopicEdited extends Type {
    /**
     * Optional. New name of the topic, if it was edited
     */
    public string $name;
    /**
     * Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the
     * icon was removed
     */
    public int $iconCustomEmojiId;
}
