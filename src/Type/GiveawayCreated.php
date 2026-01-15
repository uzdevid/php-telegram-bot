<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GiveawayCreated
 *
 * @link https://core.telegram.org/bots/api#giveawaycreated
 *
 * This object represents a service message about the creation of a scheduled giveaway.
 */
class GiveawayCreated extends Type {
    /**
     * @var int|null Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public int|null $prizeStarCount;
}
