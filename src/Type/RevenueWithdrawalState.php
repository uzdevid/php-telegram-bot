<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type RevenueWithdrawalState
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstate
 *
 * This object describes the state of a revenue withdrawal operation. Currently, it can be one of
 */
class RevenueWithdrawalState extends Type {
    /**
     * @var string Type of the state, always “pending”
     */
    public string $type;
}
