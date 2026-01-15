<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerTelegramApi
 *
 * @link https://core.telegram.org/bots/api#transactionpartnertelegramapi
 *
 * Describes a transaction with payment for paid broadcasting.
 */
class TransactionPartnerTelegramApi extends Type {
    /**
     * @var string Type of the transaction partner, always “telegram_api”
     */
    public string $type;

    /**
     * @var int The number of successful requests that exceeded regular limits and were therefore billed
     */
    public int $requestCount;
}
