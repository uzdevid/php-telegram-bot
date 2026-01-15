<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PaidMedia
 *
 * @link https://core.telegram.org/bots/api#paidmedia
 *
 * This object describes paid media. Currently, it can be one of
 */
class PaidMedia extends Type {
    /**
     * @var string Type of the paid media, always “preview”
     */
    public string $type;

    /**
     * @var int|null Optional. Media width as defined by the sender
     */
    public int|null $width;

    /**
     * @var int|null Optional. Media height as defined by the sender
     */
    public int|null $height;

    /**
     * @var int|null Optional. Duration of the media in seconds as defined by the sender
     */
    public int|null $duration;
}
