<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaPosition
 *
 * @link https://core.telegram.org/bots/api#storyareaposition
 *
 * Describes the position of a clickable area within a story.
 */
class StoryAreaPosition extends Type {
    /**
     * @var float The abscissa of the area's center, as a percentage of the media width
     */
    public float $xPercentage;

    /**
     * @var float The ordinate of the area's center, as a percentage of the media height
     */
    public float $yPercentage;

    /**
     * @var float The width of the area's rectangle, as a percentage of the media width
     */
    public float $widthPercentage;

    /**
     * @var float The height of the area's rectangle, as a percentage of the media height
     */
    public float $heightPercentage;

    /**
     * @var float The clockwise rotation angle of the rectangle, in degrees; 0-360
     */
    public float $rotationAngle;

    /**
     * @var float The radius of the rectangle corner rounding, as a percentage of the media width
     */
    public float $cornerRadiusPercentage;
}
