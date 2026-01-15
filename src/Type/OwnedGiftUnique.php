<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type OwnedGiftUnique
 *
 * @link https://core.telegram.org/bots/api#ownedgiftunique
 *
 * Describes a unique gift received and owned by a user or a chat.
 */
class OwnedGiftUnique extends Type {
    /**
     * @var string Type of the gift, always “unique”
     */
    public string $type;

    /**
     * @var UniqueGift Information about the unique gift
     */
    public UniqueGift $gift;

    /**
     * @var string|null Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
     */
    public string|null $ownedGiftId;

    /**
     * @var User|null Optional. Sender of the gift if it is a known user
     */
    public User|null $senderUser;

    /**
     * @var int Date the gift was sent in Unix time
     */
    public int $sendDate;

    /**
     * @var bool|null Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     */
    public bool|null $isSaved;

    /**
     * @var bool|null Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
     */
    public bool|null $canBeTransferred;

    /**
     * @var int|null Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
     */
    public int|null $transferStarCount;

    /**
     * @var int|null Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
     */
    public int|null $nextTransferDate;
}
