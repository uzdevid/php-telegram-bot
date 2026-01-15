<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type PaidMediaPhoto
 *
 * @link https://core.telegram.org/bots/api#paidmediaphoto
 *
 * The paid media is a photo.
 */
class PaidMediaPhoto extends Type {
    /**
     * @var string Type of the paid media, always “photo”
     */
    public string $type;

    /**
     * @var PhotoSize[] The photo
     */
    public array $photo;
}
