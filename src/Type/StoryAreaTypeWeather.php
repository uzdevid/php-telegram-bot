<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StoryAreaTypeWeather
 *
 * @link https://core.telegram.org/bots/api#storyareatypeweather
 *
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 */
class StoryAreaTypeWeather extends Type {
    /**
     * @var string Type of the area, always “weather”
     */
    public string $type;

    /**
     * @var float Temperature, in degree Celsius
     */
    public float $temperature;

    /**
     * @var string Emoji representing the weather
     */
    public string $emoji;

    /**
     * @var int A color of the area background in the ARGB format
     */
    public int $backgroundColor;
}
