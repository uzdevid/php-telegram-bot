<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundFillFreeformGradient
 *
 * @link https://core.telegram.org/bots/api#backgroundfillfreeformgradient
 *
 * The background is a freeform gradient that rotates after every message in the chat.
 */
class BackgroundFillFreeformGradient extends Type {
    /**
     * @var string Type of the background fill, always “freeform_gradient”
     */
    public string $type;

    /**
     * @var int[] A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
     */
    public array $colors;
}
