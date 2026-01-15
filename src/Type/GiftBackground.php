<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GiftBackground
 *
 * @link https://core.telegram.org/bots/api#giftbackground
 *
 * This object describes the background of a gift.
 */
class GiftBackground extends Type {
    /**
     * @var int Center color of the background in RGB format
     */
    public int $centerColor;

    /**
     * @var int Edge color of the background in RGB format
     */
    public int $edgeColor;

    /**
     * @var int Text color of the background in RGB format
     */
    public int $textColor;
}
