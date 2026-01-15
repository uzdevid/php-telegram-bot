<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type RevenueWithdrawalStateSucceeded
 *
 * @link https://core.telegram.org/bots/api#revenuewithdrawalstatesucceeded
 *
 * The withdrawal succeeded.
 */
class RevenueWithdrawalStateSucceeded extends Type {
    /**
     * @var string Type of the state, always “succeeded”
     */
    public string $type;

    /**
     * @var int Date the withdrawal was completed in Unix time
     */
    public int $date;

    /**
     * @var string An HTTPS URL that can be used to see transaction details
     */
    public string $url;
}
