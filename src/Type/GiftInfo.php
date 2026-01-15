<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GiftInfo
 *
 * @link https://core.telegram.org/bots/api#giftinfo
 *
 * Describes a service message about a regular gift that was sent or received.
 */
class GiftInfo extends Type {
    /**
     * @var Gift Information about the gift
     */
    public Gift $gift;

    /**
     * @var string|null Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
     */
    public string|null $ownedGiftId;

    /**
     * @var int|null Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
     */
    public int|null $convertStarCount;

    /**
     * @var int|null Optional. Number of Telegram Stars that were prepaid for the ability to upgrade the gift
     */
    public int|null $prepaidUpgradeStarCount;

    /**
     * @var bool|null Optional. True, if the gift's upgrade was purchased after the gift was sent
     */
    public bool|null $isUpgradeSeparate;

    /**
     * @var bool|null Optional. True, if the gift can be upgraded to a unique gift
     */
    public bool|null $canBeUpgraded;

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
     * @var int|null Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift
     */
    public int|null $uniqueGiftNumber;
}
