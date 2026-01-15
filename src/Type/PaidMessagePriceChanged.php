<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PaidMessagePriceChanged
 *
 * @link https://core.telegram.org/bots/api#paidmessagepricechanged
 *
 * Describes a service message about a change in the price of paid messages within a chat.
 */
class PaidMessagePriceChanged extends Type {
    /**
     * @var int The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message
     */
    public int $paidMessageStarCount;
}
