<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type OwnedGifts
 *
 * @link https://core.telegram.org/bots/api#ownedgifts
 *
 * Contains the list of gifts received and owned by a user or a chat.
 */
class OwnedGifts extends Type {
    /**
     * @var int The total number of gifts owned by the user or the chat
     */
    public int $totalCount;

    /**
     * @var OwnedGift[] The list of gifts
     */
    public array $gifts;

    /**
     * @var string|null Optional. Offset for the next request. If empty, then there are no more results
     */
    public string|null $nextOffset;
}
