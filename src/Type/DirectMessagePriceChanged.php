<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type DirectMessagePriceChanged
 *
 * @link https://core.telegram.org/bots/api#directmessagepricechanged
 *
 * Describes a service message about a change in the price of direct messages sent to a channel chat.
 */
class DirectMessagePriceChanged extends Type {
    /**
     * @var bool True, if direct messages are enabled for the channel chat; false otherwise
     */
    public bool $areDirectMessagesEnabled;

    /**
     * @var int|null Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
     */
    public int|null $directMessageStarCount;
}
