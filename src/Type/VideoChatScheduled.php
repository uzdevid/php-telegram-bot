<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoChatScheduled
 *
 * @link https://core.telegram.org/bots/api#videochatscheduled
 *
 * This object represents a service message about a video chat scheduled in the chat.
 */
class VideoChatScheduled extends Type {
    /**
     * @var int Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
     */
    public int $startDate;
}
