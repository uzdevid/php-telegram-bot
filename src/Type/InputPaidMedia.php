<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputPaidMedia
 *
 * @link https://core.telegram.org/bots/api#inputpaidmedia
 *
 * This object describes the paid media to be sent. Currently, it can be one of
 */
class InputPaidMedia extends Type {
    /**
     * @var string Type of the media, must be photo
     */
    public string $type;

    /**
     * @var string File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     */
    public string $media;
}
