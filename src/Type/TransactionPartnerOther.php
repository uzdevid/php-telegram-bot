<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerOther
 *
 * @link https://core.telegram.org/bots/api#transactionpartnerother
 *
 * Describes a transaction with an unknown source or recipient.
 */
class TransactionPartnerOther extends Type {
    /**
     * @var string Type of the transaction partner, always “other”
     */
    public string $type;
}
