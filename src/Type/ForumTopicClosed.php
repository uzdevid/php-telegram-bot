<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopicClosed
 *
 * @link https://core.telegram.org/bots/api#forumtopicclosed
 *
 * This object represents a service message about a forum topic closed in the chat. Currently holds no information.
 */
class ForumTopicClosed extends Type {
    /**
     * @var string|null Optional. New name of the topic, if it was edited
     */
    public string|null $name;

    /**
     * @var string|null Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
     */
    public string|null $iconCustomEmojiId;
}
