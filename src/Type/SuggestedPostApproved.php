<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostApproved
 *
 * @link https://core.telegram.org/bots/api#suggestedpostapproved
 *
 * Describes a service message about the approval of a suggested post.
 */
class SuggestedPostApproved extends Type {
    /**
     * @var Message|null Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $suggestedPostMessage;

    /**
     * @var SuggestedPostPrice|null Optional. Amount paid for the post
     */
    public SuggestedPostPrice|null $price;

    /**
     * @var int Date when the post will be published
     */
    public int $sendDate;
}
