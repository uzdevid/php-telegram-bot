<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundTypeFill
 *
 * @link https://core.telegram.org/bots/api#backgroundtypefill
 *
 * The background is automatically filled based on the selected colors.
 */
class BackgroundTypeFill extends Type {
    /**
     * @var string Type of the background, always “fill”
     */
    public string $type;

    /**
     * @var BackgroundFill The background fill
     */
    public BackgroundFill $fill;

    /**
     * @var int Dimming of the background in dark themes, as a percentage; 0-100
     */
    public int $darkThemeDimming;
}
