<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostApprovalFailed
 *
 * @link https://core.telegram.org/bots/api#suggestedpostapprovalfailed
 *
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 */
class SuggestedPostApprovalFailed extends Type {
    /**
     * @var Message|null Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
     */
    public Message|null $suggestedPostMessage;

    /**
     * @var SuggestedPostPrice Expected price of the post
     */
    public SuggestedPostPrice $price;
}
