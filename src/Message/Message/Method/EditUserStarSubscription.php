<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns
 * True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id', 'telegram_payment_charge_id',
 * and 'is_canceled' fields and dispatch the request directly.
 *
 * @link https://core.telegram.org/bots/api#edituserstarsubscription
 */
class EditUserStarSubscription extends Method implements MethodInterface {
    /**
     * Creates a new EditUserStarSubscription method and sets the required 'user_id',
     * 'telegram_payment_charge_id', and 'is_canceled' fields.
     *
     * @param int $userId Identifier of the user whose subscription will be edited
     * @param string $telegramPaymentChargeId Telegram payment identifier for the subscription
     * @param bool $isCanceled Pass True to cancel extension of the user subscription; the
     *   subscription must be active up to the end of the current subscription period. Pass False to
     *   allow the user to re-enable a subscription that was previously canceled by the bot.
     */
    public function __construct(int $userId, string $telegramPaymentChargeId, bool $isCanceled = true) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('telegram_payment_charge_id', $telegramPaymentChargeId);
        $this->addAttribute('is_canceled', $isCanceled);
    }

    public function methodName(): string {
        return 'editUserStarSubscription';
    }
}
