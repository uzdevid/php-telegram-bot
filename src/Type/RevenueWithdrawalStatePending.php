<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type RevenueWithdrawalStatePending
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstatepending
 *
 * The withdrawal is in progress.
 */
class RevenueWithdrawalStatePending extends Type {
    /**
     * @var string Type of the state, always “pending”
     */
    public string $type;
}
