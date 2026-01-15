<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundType
 *
 * @link https://core.telegram.org/bots/api#backgroundtype
 *
 * This object describes the type of a background. Currently, it can be one of
 */
class BackgroundType extends Type {
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
