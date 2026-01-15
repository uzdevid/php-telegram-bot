<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method EditUserStarSubscription
 *
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns True on success.
 */
class EditUserStarSubscription extends Method implements MethodInterface {
    public function __construct(int $userId, string $telegramPaymentChargeId, bool $isCanceled) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('telegram_payment_charge_id', $telegramPaymentChargeId);
        $this->addAttribute('is_canceled', $isCanceled);
    }

    public function methodName(): string {
        return "editUserStarSubscription";
    }


}
