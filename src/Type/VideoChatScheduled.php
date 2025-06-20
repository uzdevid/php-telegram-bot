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
    public int $startDate;
}