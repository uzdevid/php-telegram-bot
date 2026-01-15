<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Gift
 *
 * @link https://core.telegram.org/bots/api#gift
 *
 * This object represents a gift that can be sent by the bot.
 */
class Gift extends Type {
    /**
     * @var string Unique identifier of the gift
     */
    public string $id;

    /**
     * @var Sticker The sticker that represents the gift
     */
    public Sticker $sticker;

    /**
     * @var int The number of Telegram Stars that must be paid to send the sticker
     */
    public int $starCount;

    /**
     * @var int|null Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
     */
    public int|null $upgradeStarCount;

    /**
     * @var bool|null Optional. True, if the gift can only be purchased by Telegram Premium subscribers
     */
    public bool|null $isPremium;

    /**
     * @var bool|null Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
     */
    public bool|null $hasColors;

    /**
     * @var int|null Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
     */
    public int|null $totalCount;

    /**
     * @var int|null Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
     */
    public int|null $remainingCount;

    /**
     * @var int|null Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
     */
    public int|null $personalTotalCount;

    /**
     * @var int|null Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
     */
    public int|null $personalRemainingCount;

    /**
     * @var GiftBackground|null Optional. Background of the gift
     */
    public GiftBackground|null $background;

    /**
     * @var int|null Optional. The total number of different unique gifts that can be obtained by upgrading the gift
     */
    public int|null $uniqueGiftVariantCount;

    /**
     * @var Chat|null Optional. Information about the chat that published the gift
     */
    public Chat|null $publisherChat;
}
