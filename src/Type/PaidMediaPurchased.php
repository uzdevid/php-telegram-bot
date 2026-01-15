<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PaidMediaPurchased
 *
 * @link https://core.telegram.org/bots/api#paidmediapurchased
 *
 * This object contains information about a paid media purchase.
 */
class PaidMediaPurchased extends Type {
    /**
     * @var User User who purchased the media
     */
    public User $from;

    /**
     * @var string Bot-specified paid media payload
     */
    public string $paidMediaPayload;
}
