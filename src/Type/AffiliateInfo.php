<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type AffiliateInfo
 *
 * @link https://core.telegram.org/bots/api#affiliateinfo
 *
 * Contains information about the affiliate that received a commission via this transaction.
 */
class AffiliateInfo extends Type {
    /**
     * @var User|null Optional. The bot or the user that received an affiliate commission if it was received by a bot or a user
     */
    public User|null $affiliateUser;

    /**
     * @var Chat|null Optional. The chat that received an affiliate commission if it was received by a chat
     */
    public Chat|null $affiliateChat;

    /**
     * @var int The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users
     */
    public int $commissionPerMille;

    /**
     * @var int Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds
     */
    public int $amount;

    /**
     * @var int|null Optional. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds
     */
    public int|null $nanostarAmount;
}
