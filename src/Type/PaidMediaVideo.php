<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PaidMediaVideo
 *
 * @link https://core.telegram.org/bots/api#paidmediavideo
 *
 * The paid media is a video.
 */
class PaidMediaVideo extends Type {
    /**
     * @var string Type of the paid media, always “video”
     */
    public string $type;

    /**
     * @var Video The video
     */
    public Video $video;
}
