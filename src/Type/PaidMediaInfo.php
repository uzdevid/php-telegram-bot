<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PaidMediaInfo
 *
 * @link https://core.telegram.org/bots/api#paidmediainfo
 *
 * Describes the paid media added to a message.
 */
class PaidMediaInfo extends Type {
    /**
     * @var int The number of Telegram Stars that must be paid to buy access to the media
     */
    public int $starCount;

    /**
     * @var PaidMedia[] Information about the paid media
     */
    public array $paidMedia;
}
