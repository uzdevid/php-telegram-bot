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
    public int $totalCount;
    public PhotoSize $photoSize;
}