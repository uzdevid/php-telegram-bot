<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundFill
 *
 * @link https://core.telegram.org/bots/api#backgroundfill
 *
 * This object describes the way a background is filled based on the selected colors. Currently, it can be one of
 */
class BackgroundFill extends Type {
    /**
     * @var string Type of the background fill, always “solid”
     */
    public string $type;

    /**
     * @var int The color of the background fill in the RGB24 format
     */
    public int $color;
}
