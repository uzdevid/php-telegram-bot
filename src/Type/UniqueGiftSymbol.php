<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGiftSymbol
 *
 * @link https://core.telegram.org/bots/api#uniquegiftsymbol
 *
 * This object describes the symbol shown on the pattern of a unique gift.
 */
class UniqueGiftSymbol extends Type {
    /**
     * @var string Name of the symbol
     */
    public string $name;

    /**
     * @var Sticker The sticker that represents the unique gift
     */
    public Sticker $sticker;

    /**
     * @var int The number of unique gifts that receive this model for every 1000 gifts upgraded
     */
    public int $rarityPerMille;
}
