<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoChatStarted
 *
 * @link https://core.telegram.org/bots/api#videochatstarted
 *
 * This object represents a service message about a video chat started in the chat. Currently holds no information.
 */
class VideoChatStarted extends Type {
    /**
     * @var int Video chat duration in seconds
     */
    public int $duration;
}
