<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Giveaway
 *
 * @link https://core.telegram.org/bots/api#giveaway
 *
 * This object represents a message about a scheduled giveaway.
 */
class Giveaway extends Type {
    /**
     * @var Chat[] The list of chats which the user must join to participate in the giveaway
     */
    public array $chats;

    /**
     * @var int Point in time (Unix timestamp) when winners of the giveaway will be selected
     */
    public int $winnersSelectionDate;

    /**
     * @var int The number of users which are supposed to be selected as winners of the giveaway
     */
    public int $winnerCount;

    /**
     * @var bool|null Optional. True, if only users who join the chats after the giveaway started should be eligible to win
     */
    public bool|null $onlyNewMembers;

    /**
     * @var bool|null Optional. True, if the list of giveaway winners will be visible to everyone
     */
    public bool|null $hasPublicWinners;

    /**
     * @var string|null Optional. Description of additional giveaway prize
     */
    public string|null $prizeDescription;

    /**
     * @var string[]|null Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
     */
    public array|null $countryCodes;

    /**
     * @var int|null Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
     */
    public int|null $prizeStarCount;

    /**
     * @var int|null Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
     */
    public int|null $premiumSubscriptionMonthCount;
}
