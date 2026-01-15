<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatBoostSourceGiveaway
 *
 * @link https://core.telegram.org/bots/api#chatboostsourcegiveaway
 *
 * The boost was obtained by the creation of a Telegram Premium or a Telegram Star giveaway. This boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription for Telegram Premium giveaways and prize_star_count / 500 times for one year for Telegram Star giveaways.
 */
class ChatBoostSourceGiveaway extends Type {
    /**
     * @var string Source of the boost, always “giveaway”
     */
    public string $source;

    /**
     * @var int Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.
     */
    public int $giveawayMessageId;

    /**
     * @var User|null Optional. User that won the prize in the giveaway if any; for Telegram Premium giveaways only
     */
    public User|null $user;

    /**
     * @var int|null Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public int|null $prizeStarCount;

    /**
     * @var bool|null Optional. True, if the giveaway was completed, but there was no user to win the prize
     */
    public bool|null $isUnclaimed;
}
