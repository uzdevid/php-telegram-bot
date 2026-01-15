<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ShippingOption
 *
 * @link https://core.telegram.org/bots/api#shippingoption
 *
 * This object represents one shipping option.
 */
class ShippingOption extends Type {
    /**
     * @var string Shipping option identifier
     */
    public string $id;

    /**
     * @var string Option title
     */
    public string $title;

    /**
     * @var LabeledPrice[] List of price portions
     */
    public array $prices;
}
