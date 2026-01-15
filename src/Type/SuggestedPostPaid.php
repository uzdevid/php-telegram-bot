<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostPaid
 *
 * @link https://core.telegram.org/bots/api#suggestedpostpaid
 *
 * Describes a service message about a successful payment for a suggested post.
 */
class SuggestedPostPaid extends Type {
    /**
     * @var Message|null Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $suggestedPostMessage;

    /**
     * @var string Currency in which the payment was made. Currently, one of “XTR” for Telegram Stars or “TON” for toncoins
     */
    public string $currency;

    /**
     * @var int|null Optional. The amount of the currency that was received by the channel in nanotoncoins; for payments in toncoins only
     */
    public int|null $amount;

    /**
     * @var StarAmount|null Optional. The amount of Telegram Stars that was received by the channel; for payments in Telegram Stars only
     */
    public StarAmount|null $starAmount;
}
