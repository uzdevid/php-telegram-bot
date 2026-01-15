<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostRefunded
 *
 * @link https://core.telegram.org/bots/api#suggestedpostrefunded
 *
 * Describes a service message about a payment refund for a suggested post.
 */
class SuggestedPostRefunded extends Type {
    /**
     * @var Message|null Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $suggestedPostMessage;

    /**
     * @var string Reason for the refund. Currently, one of “post_deleted” if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted, or “payment_refunded” if the payer refunded their payment.
     */
    public string $reason;
}
