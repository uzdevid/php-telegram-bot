<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundTypeWallpaper
 *
 * @link https://core.telegram.org/bots/api#backgroundtypewallpaper
 *
 * The background is a wallpaper in the JPEG format.
 */
class BackgroundTypeWallpaper extends Type {
    /**
     * @var string Type of the background, always “wallpaper”
     */
    public string $type;

    /**
     * @var Document Document with the wallpaper
     */
    public Document $document;

    /**
     * @var int Dimming of the background in dark themes, as a percentage; 0-100
     */
    public int $darkThemeDimming;

    /**
     * @var bool|null Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     */
    public bool|null $isBlurred;

    /**
     * @var bool|null Optional. True, if the background moves slightly when the device is tilted
     */
    public bool|null $isMoving;
}
