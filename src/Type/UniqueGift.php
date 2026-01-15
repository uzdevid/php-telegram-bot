<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UniqueGift
 *
 * @link https://core.telegram.org/bots/api#uniquegift
 *
 * This object describes a unique gift that was upgraded from a regular gift.
 */
class UniqueGift extends Type {
    /**
     * @var string Identifier of the regular gift from which the gift was upgraded
     */
    public string $giftId;

    /**
     * @var string Human-readable name of the regular gift from which this unique gift was upgraded
     */
    public string $baseName;

    /**
     * @var string Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
     */
    public string $name;

    /**
     * @var int Unique number of the upgraded gift among gifts upgraded from the same regular gift
     */
    public int $number;

    /**
     * @var UniqueGiftModel Model of the gift
     */
    public UniqueGiftModel $model;

    /**
     * @var UniqueGiftSymbol Symbol of the gift
     */
    public UniqueGiftSymbol $symbol;

    /**
     * @var UniqueGiftBackdrop Backdrop of the gift
     */
    public UniqueGiftBackdrop $backdrop;

    /**
     * @var bool|null Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
     */
    public bool|null $isPremium;

    /**
     * @var bool|null Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
     */
    public bool|null $isFromBlockchain;

    /**
     * @var UniqueGiftColors|null Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
     */
    public UniqueGiftColors|null $colors;

    /**
     * @var Chat|null Optional. Information about the chat that published the gift
     */
    public Chat|null $publisherChat;
}
