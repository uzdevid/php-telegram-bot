<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ForumTopicCreated
 *
 * @link https://core.telegram.org/bots/api#forumtopiccreated
 *
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated extends Type {
    /**
     * @var string Name of the topic
     */
    public string $name;

    /**
     * @var int Color of the topic icon in RGB format
     */
    public int $iconColor;

    /**
     * @var string|null Optional. Unique identifier of the custom emoji shown as the topic icon
     */
    public string|null $iconCustomEmojiId;

    /**
     * @var bool|null Optional. True, if the name of the topic wasn't specified explicitly by its creator and likely needs to be changed by the bot
     */
    public bool|null $isNameImplicit;
}
