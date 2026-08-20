<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoChatEnded
 *
 * @see https://core.telegram.org/bots/api#videochatended
 *
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded extends Type {
    /**
     * Video chat duration in seconds
     */
    public int $duration;
}
