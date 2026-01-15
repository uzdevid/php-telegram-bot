<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GiveawayWinners
 *
 * @link https://core.telegram.org/bots/api#giveawaywinners
 *
 * This object represents a message about the completion of a giveaway with public winners.
 */
class GiveawayWinners extends Type {
    /**
     * @var Chat The chat that created the giveaway
     */
    public Chat $chat;

    /**
     * @var int Identifier of the message with the giveaway in the chat
     */
    public int $giveawayMessageId;

    /**
     * @var int Point in time (Unix timestamp) when winners of the giveaway were selected
     */
    public int $winnersSelectionDate;

    /**
     * @var int Total number of winners in the giveaway
     */
    public int $winnerCount;

    /**
     * @var User[] List of up to 100 winners of the giveaway
     */
    public array $winners;

    /**
     * @var int|null Optional. The number of other chats the user had to join in order to be eligible for the giveaway
     */
    public int|null $additionalChatCount;

    /**
     * @var int|null Optional. The number of Telegram Stars that were split between giveaway winners; for Telegram Star giveaways only
     */
    public int|null $prizeStarCount;

    /**
     * @var int|null Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     */
    public int|null $premiumSubscriptionMonthCount;

    /**
     * @var int|null Optional. Number of undistributed prizes
     */
    public int|null $unclaimedPrizeCount;

    /**
     * @var bool|null Optional. True, if only users who had joined the chats after the giveaway started were eligible to win
     */
    public bool|null $onlyNewMembers;

    /**
     * @var bool|null Optional. True, if the giveaway was canceled because the payment for it was refunded
     */
    public bool|null $wasRefunded;

    /**
     * @var string|null Optional. Description of additional giveaway prize
     */
    public string|null $prizeDescription;
}
