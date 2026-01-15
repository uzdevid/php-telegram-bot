<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoChatEnded
 *
 * @link https://core.telegram.org/bots/api#videochatended
 *
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded extends Type {
    /**
     * @var int Video chat duration in seconds
     */
    public int $duration;
}
