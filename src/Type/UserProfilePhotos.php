<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UserProfilePhotos
 *
 * @see https://core.telegram.org/bots/api#userprofilephotos
 *
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos extends Type {
    /**
     * Total number of profile pictures the target user has
     */
    public int $totalCount;
    public PhotoSize $photoSize;
}
