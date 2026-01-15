<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostDeclined
 *
 * @link https://core.telegram.org/bots/api#suggestedpostdeclined
 *
 * Describes a service message about the rejection of a suggested post.
 */
class SuggestedPostDeclined extends Type {
    /**
     * @var Message|null Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $suggestedPostMessage;

    /**
     * @var string|null Optional. Comment with which the post was declined
     */
    public string|null $comment;
}
