<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopic
 *
 * @see https://core.telegram.org/bots/api#forumtopic
 *
 * This object represents a forum topic.
 */
class ForumTopic extends Type {
    /**
     * Unique identifier of the forum topic
     */
    public int $messageThreadId;
    /**
     * Name of the topic
     */
    public string $name;
    /**
     * Color of the topic icon in RGB format
     */
    public int $iconColor;
    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon
     */
    public string $iconCustomEmojiId;
}
