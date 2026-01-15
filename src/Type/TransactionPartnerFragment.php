<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerFragment
 *
 * @link https://core.telegram.org/bots/api#transactionpartnerfragment
 *
 * Describes a withdrawal transaction with Fragment.
 */
class TransactionPartnerFragment extends Type {
    /**
     * @var string Type of the transaction partner, always “fragment”
     */
    public string $type;

    /**
     * @var RevenueWithdrawalState|null Optional. State of the transaction if the transaction is outgoing
     */
    public RevenueWithdrawalState|null $withdrawalState;
}
