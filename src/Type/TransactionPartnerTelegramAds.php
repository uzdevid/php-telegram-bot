<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerTelegramAds
 *
 * @link https://core.telegram.org/bots/api#transactionpartnertelegramads
 *
 * Describes a withdrawal transaction to the Telegram Ads platform.
 */
class TransactionPartnerTelegramAds extends Type {
    /**
     * @var string Type of the transaction partner, always “telegram_ads”
     */
    public string $type;
}
