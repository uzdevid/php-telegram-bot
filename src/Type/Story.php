<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Story
 *
 * @link https://core.telegram.org/bots/api#story
 *
 * This object represents a story.
 */
class Story extends Type {
    /**
     * @var Chat Chat that posted the story
     */
    public Chat $chat;

    /**
     * @var int Unique identifier for the story in the chat
     */
    public int $id;
}
