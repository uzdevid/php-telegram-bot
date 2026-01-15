<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type RevenueWithdrawalStateFailed
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstatefailed
 *
 * The withdrawal failed and the transaction was refunded.
 */
class RevenueWithdrawalStateFailed extends Type {
    /**
     * @var string Type of the state, always “failed”
     */
    public string $type;
}
