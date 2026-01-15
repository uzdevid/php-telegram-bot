<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostInfo
 *
 * @link https://core.telegram.org/bots/api#suggestedpostinfo
 *
 * Contains information about a suggested post.
 */
class SuggestedPostInfo extends Type {
    /**
     * @var string State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”.
     */
    public string $state;

    /**
     * @var SuggestedPostPrice|null Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
     */
    public SuggestedPostPrice|null $price;

    /**
     * @var int|null Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
     */
    public int|null $sendDate;
}
