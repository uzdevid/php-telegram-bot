<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaTypeLocation
 *
 * @link https://core.telegram.org/bots/api#storyareatypelocation
 *
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 */
class StoryAreaTypeLocation extends Type {
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
