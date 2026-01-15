<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type SuggestedPostParameters
 *
 * @link https://core.telegram.org/bots/api#suggestedpostparameters
 *
 * Contains parameters of a post that is being suggested by the bot.
 */
class SuggestedPostParameters extends Type {
    /**
     * @var SuggestedPostPrice|null Optional. Proposed price for the post. If the field is omitted, then the post is unpaid.
     */
    public SuggestedPostPrice|null $price;

    /**
     * @var int|null Optional. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
     */
    public int|null $sendDate;
}
