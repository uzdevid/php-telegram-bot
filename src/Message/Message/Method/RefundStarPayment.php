<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Refunds a successful payment in Telegram Stars . Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' and
 * 'telegram_payment_charge_id' fields and dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#refundstarpayment
 */
class RefundStarPayment extends Method implements MethodInterface {
    /**
     * Creates a new RefundStarPayment method and sets the required 'user_id' and
     * 'telegram_payment_charge_id' fields.
     *
     * @param int $userId Identifier of the user whose payment will be refunded
     * @param string $telegramPaymentChargeId Telegram payment identifier
     */
    public function __construct(int $userId, string $telegramPaymentChargeId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('telegram_payment_charge_id', $telegramPaymentChargeId);
    }

    public function methodName(): string {
        return 'refundStarPayment';
    }
}
