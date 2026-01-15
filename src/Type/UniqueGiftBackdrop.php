<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGiftBackdrop
 *
 * @link https://core.telegram.org/bots/api#uniquegiftbackdrop
 *
 * This object describes the backdrop of a unique gift.
 */
class UniqueGiftBackdrop extends Type {
    /**
     * @var string Name of the backdrop
     */
    public string $name;

    /**
     * @var UniqueGiftBackdropColors Colors of the backdrop
     */
    public UniqueGiftBackdropColors $colors;

    /**
     * @var int The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
     */
    public int $rarityPerMille;
}
