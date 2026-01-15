<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGiftBackdropColors
 *
 * @link https://core.telegram.org/bots/api#uniquegiftbackdropcolors
 *
 * This object describes the colors of the backdrop of a unique gift.
 */
class UniqueGiftBackdropColors extends Type {
    /**
     * @var int The color in the center of the backdrop in RGB format
     */
    public int $centerColor;

    /**
     * @var int The color on the edges of the backdrop in RGB format
     */
    public int $edgeColor;

    /**
     * @var int The color to be applied to the symbol in RGB format
     */
    public int $symbolColor;

    /**
     * @var int The color for the text on the backdrop in RGB format
     */
    public int $textColor;
}
