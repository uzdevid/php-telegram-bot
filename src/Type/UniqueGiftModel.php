<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGiftModel
 *
 * @link https://core.telegram.org/bots/api#uniquegiftmodel
 *
 * This object describes the model of a unique gift.
 */
class UniqueGiftModel extends Type {
    /**
     * @var string Name of the model
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
