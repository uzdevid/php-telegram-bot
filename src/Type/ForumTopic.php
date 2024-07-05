<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopic
 *
 * @link https://core.telegram.org/bots/api#forumtopic
 *
 * This object represents a forum topic.
 */
class ForumTopic extends Type {

    public int $messageThreadId;
    public string $name;
    public int $iconColor;
    public string $iconCustomEmojiId;
}