<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UserProfilePhotos
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos extends Type {
    /**
     * @var int Total number of profile pictures the target user has
     */
    public int $totalCount;

    /**
     * @var PhotoSize[][] Requested profile pictures (in up to 4 sizes each)
     */
    public array $photos;
}
