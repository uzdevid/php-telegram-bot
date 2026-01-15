<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type StarTransaction
 *
 * @link https://core.telegram.org/bots/api#startransaction
 *
 * Describes a Telegram Star transaction. Note that if the buyer initiates a chargeback with the payment provider from whom they acquired Stars (e.g., Apple, Google) following this transaction, the refunded Stars will be deducted from the bot's balance. This is outside of Telegram's control.
 */
class StarTransaction extends Type {
    /**
     * @var string Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with SuccessfulPayment.telegram_payment_charge_id for successful incoming payments from users.
     */
    public string $id;

    /**
     * @var int Integer amount of Telegram Stars transferred by the transaction
     */
    public int $amount;

    /**
     * @var int|null Optional. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999
     */
    public int|null $nanostarAmount;

    /**
     * @var int Date the transaction was created in Unix time
     */
    public int $date;

    /**
     * @var TransactionPartner|null Optional. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions
     */
    public TransactionPartner|null $source;

    /**
     * @var TransactionPartner|null Optional. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions
     */
    public TransactionPartner|null $receiver;
}
