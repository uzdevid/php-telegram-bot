<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GiveawayCompleted
 *
 * @link https://core.telegram.org/bots/api#giveawaycompleted
 *
 * This object represents a service message about the completion of a giveaway without public winners.
 */
class GiveawayCompleted extends Type {
    /**
     * @var int Number of winners in the giveaway
     */
    public int $winnerCount;

    /**
     * @var int|null Optional. Number of undistributed prizes
     */
    public int|null $unclaimedPrizeCount;

    /**
     * @var Message|null Optional. Message with the giveaway that was completed, if it wasn't deleted
     */
    public Message|null $giveawayMessage;

    /**
     * @var bool|null Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
     */
    public bool|null $isStarGiveaway;
}
