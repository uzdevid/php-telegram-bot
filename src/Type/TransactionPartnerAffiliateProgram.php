<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerAffiliateProgram
 *
 * @link https://core.telegram.org/bots/api#transactionpartneraffiliateprogram
 *
 * Describes the affiliate program that issued the affiliate commission received via this transaction.
 */
class TransactionPartnerAffiliateProgram extends Type {
    /**
     * @var string Type of the transaction partner, always “affiliate_program”
     */
    public string $type;

    /**
     * @var User|null Optional. Information about the bot that sponsored the affiliate program
     */
    public User|null $sponsorUser;

    /**
     * @var int The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users
     */
    public int $commissionPerMille;
}
