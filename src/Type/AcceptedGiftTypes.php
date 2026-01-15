<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type AcceptedGiftTypes
 *
 * @link https://core.telegram.org/bots/api#acceptedgifttypes
 *
 * This object describes the types of gifts that can be gifted to a user or a chat.
 */
class AcceptedGiftTypes extends Type {
    /**
     * @var bool True, if unlimited regular gifts are accepted
     */
    public bool $unlimitedGifts;

    /**
     * @var bool True, if limited regular gifts are accepted
     */
    public bool $limitedGifts;

    /**
     * @var bool True, if unique gifts or gifts that can be upgraded to unique for free are accepted
     */
    public bool $uniqueGifts;

    /**
     * @var bool True, if a Telegram Premium subscription is accepted
     */
    public bool $premiumSubscription;

    /**
     * @var bool True, if transfers of unique gifts from channels are accepted
     */
    public bool $giftsFromChannels;
}
