<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type InputSticker
 *
 * @link https://core.telegram.org/bots/api#inputsticker
 *
 * This object describes a sticker to be added to a sticker set.
 */
class InputSticker extends Type {
    /**
     * @var string The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
     */
    public string $sticker;

    /**
     * @var string Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
     */
    public string $format;

    /**
     * @var string[] List of 1-20 emoji associated with the sticker
     */
    public array $emojiList;

    /**
     * @var MaskPosition|null Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     */
    public MaskPosition|null $maskPosition;

    /**
     * @var string[]|null Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     */
    public array|null $keywords;
}
