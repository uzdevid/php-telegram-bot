<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopicCreated
 *
 * @see https://core.telegram.org/bots/api#forumtopiccreated
 *
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated extends Type {
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
