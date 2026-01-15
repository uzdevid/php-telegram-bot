<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGiftColors
 *
 * @link https://core.telegram.org/bots/api#uniquegiftcolors
 *
 * This object contains information about the color scheme for a user's name, message replies and link previews based on a unique gift.
 */
class UniqueGiftColors extends Type {
    /**
     * @var string Custom emoji identifier of the unique gift's model
     */
    public string $modelCustomEmojiId;

    /**
     * @var string Custom emoji identifier of the unique gift's symbol
     */
    public string $symbolCustomEmojiId;

    /**
     * @var int Main color used in light themes; RGB format
     */
    public int $lightThemeMainColor;

    /**
     * @var int[] List of 1-3 additional colors used in light themes; RGB format
     */
    public array $lightThemeOtherColors;

    /**
     * @var int Main color used in dark themes; RGB format
     */
    public int $darkThemeMainColor;

    /**
     * @var int[] List of 1-3 additional colors used in dark themes; RGB format
     */
    public array $darkThemeOtherColors;
}
