<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundFillSolid
 *
 * @link https://core.telegram.org/bots/api#backgroundfillsolid
 *
 * The background is filled using the selected color.
 */
class BackgroundFillSolid extends Type {
    /**
     * @var string Type of the background fill, always “solid”
     */
    public string $type;

    /**
     * @var int The color of the background fill in the RGB24 format
     */
    public int $color;
}
