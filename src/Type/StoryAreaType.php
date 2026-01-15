<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaType
 *
 * @link https://core.telegram.org/bots/api#storyareatype
 *
 * Describes the type of a clickable area on a story. Currently, it can be one of
 */
class StoryAreaType extends Type {
    /**
     * @var string Type of the area, always “location”
     */
    public string $type;

    /**
     * @var float Location latitude in degrees
     */
    public float $latitude;

    /**
     * @var float Location longitude in degrees
     */
    public float $longitude;

    /**
     * @var LocationAddress|null Optional. Address of the location
     */
    public LocationAddress|null $address;
}
