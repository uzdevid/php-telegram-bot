<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputProfilePhotoAnimated
 *
 * @link https://core.telegram.org/bots/api#inputprofilephotoanimated
 *
 * An animated profile photo in the MPEG4 format.
 */
class InputProfilePhotoAnimated extends Type {
    /**
     * @var string Type of the profile photo, must be animated
     */
    public string $type;

    /**
     * @var string The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     */
    public string $animation;

    /**
     * @var float|null Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
     */
    public float|null $mainFrameTimestamp;
}
