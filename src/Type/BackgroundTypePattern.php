<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundTypePattern
 *
 * @link https://core.telegram.org/bots/api#backgroundtypepattern
 *
 * The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 */
class BackgroundTypePattern extends Type {
    /**
     * @var string Type of the background, always “pattern”
     */
    public string $type;

    /**
     * @var Document Document with the pattern
     */
    public Document $document;

    /**
     * @var BackgroundFill The background fill that is combined with the pattern
     */
    public BackgroundFill $fill;

    /**
     * @var int Intensity of the pattern when it is shown above the filled background; 0-100
     */
    public int $intensity;

    /**
     * @var bool|null Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
     */
    public bool|null $isInverted;

    /**
     * @var bool|null Optional. True, if the background moves slightly when the device is tilted
     */
    public bool|null $isMoving;
}
