<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method RefundStarPayment
 *
 * Refunds a successful payment in Telegram Stars. Returns True on success.
 */
class RefundStarPayment extends Method implements MethodInterface {

    /**
     * @param int $userId Identifier of the user whose payment will be refunded
     * @param string $telegramPaymentChargeId Telegram payment identifier
     */
    public function __construct(int $userId, string $telegramPaymentChargeId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('telegram_payment_charge_id', $telegramPaymentChargeId);
    }

    public function methodName(): string {
        return "refundStarPayment";
    }


}
