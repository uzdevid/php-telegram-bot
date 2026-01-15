<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type OwnedGiftRegular
 *
 * @link https://core.telegram.org/bots/api#ownedgiftregular
 *
 * Describes a regular gift owned by a user or a chat.
 */
class OwnedGiftRegular extends Type {
    /**
     * @var string Type of the gift, always “regular”
     */
    public string $type;

    /**
     * @var Gift Information about the regular gift
     */
    public Gift $gift;

    /**
     * @var string|null Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
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
     * @var string|null Optional. Text of the message that was added to the gift
     */
    public string|null $text;

    /**
     * @var MessageEntity[]|null Optional. Special entities that appear in the text
     */
    public array|null $entities;

    /**
     * @var bool|null Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
     */
    public bool|null $isPrivate;

    /**
     * @var bool|null Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
     */
    public bool|null $isSaved;

    /**
     * @var bool|null Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
     */
    public bool|null $canBeUpgraded;

    /**
     * @var bool|null Optional. True, if the gift was refunded and isn't available anymore
     */
    public bool|null $wasRefunded;

    /**
     * @var int|null Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business accounts only
     */
    public int|null $convertStarCount;

    /**
     * @var int|null Optional. Number of Telegram Stars that were paid for the ability to upgrade the gift
     */
    public int|null $prepaidUpgradeStarCount;

    /**
     * @var bool|null Optional. True, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
     */
    public bool|null $isUpgradeSeparate;

    /**
     * @var int|null Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift
     */
    public int|null $uniqueGiftNumber;
}
