<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputMediaPhoto
 *
 * @link https://core.telegram.org/bots/api#inputmediaphoto
 *
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends Type {
    /**
     * @var string Type of the result, must be photo
     */
    public string $type;

    /**
     * @var string File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     */
    public string $media;

    /**
     * @var string|null Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
     */
    public string|null $caption;

    /**
     * @var string|null Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     */
    public string|null $parseMode;

    /**
     * @var MessageEntity[]|null Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     */
    public array|null $captionEntities;

    /**
     * @var bool|null Optional. Pass True, if the caption must be shown above the message media
     */
    public bool|null $showCaptionAboveMedia;

    /**
     * @var bool|null Optional. Pass True if the photo needs to be covered with a spoiler animation
     */
    public bool|null $hasSpoiler;
}
