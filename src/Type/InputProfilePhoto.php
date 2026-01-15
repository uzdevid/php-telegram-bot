<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputProfilePhoto
 *
 * @link https://core.telegram.org/bots/api#inputprofilephoto
 *
 * This object describes a profile photo to set. Currently, it can be one of
 */
class InputProfilePhoto extends Type {
    /**
     * @var string Type of the profile photo, must be static
     */
    public string $type;

    /**
     * @var string The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     */
    public string $photo;
}
