<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundFillGradient
 *
 * @link https://core.telegram.org/bots/api#backgroundfillgradient
 *
 * The background is a gradient fill.
 */
class BackgroundFillGradient extends Type {
    /**
     * @var string Type of the background fill, always “gradient”
     */
    public string $type;

    /**
     * @var int Top color of the gradient in the RGB24 format
     */
    public int $topColor;

    /**
     * @var int Bottom color of the gradient in the RGB24 format
     */
    public int $bottomColor;

    /**
     * @var int Clockwise rotation angle of the background fill in degrees; 0-359
     */
    public int $rotationAngle;
}
