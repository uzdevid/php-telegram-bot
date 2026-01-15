<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGiftInfo
 *
 * @link https://core.telegram.org/bots/api#uniquegiftinfo
 *
 * Describes a service message about a unique gift that was sent or received.
 */
class UniqueGiftInfo extends Type {
    /**
     * @var UniqueGift Information about the gift
     */
    public UniqueGift $gift;

    /**
     * @var string Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers
     */
    public string $origin;

    /**
     * @var string|null Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins.
     */
    public string|null $lastResaleCurrency;

    /**
     * @var int|null Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanotoncoins
     */
    public int|null $lastResaleAmount;

    /**
     * @var string|null Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     */
    public string|null $ownedGiftId;

    /**
     * @var int|null Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     */
    public int|null $transferStarCount;

    /**
     * @var int|null Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public int|null $nextTransferDate;
}
