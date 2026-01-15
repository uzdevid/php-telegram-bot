<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StarTransactions
 *
 * @link https://core.telegram.org/bots/api#startransactions
 *
 * Contains a list of Telegram Star transactions.
 */
class StarTransactions extends Type {
    /**
     * @var StarTransaction[] The list of transactions
     */
    public array $transactions;
}
