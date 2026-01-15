<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Sticker
 *
 * @link https://core.telegram.org/bots/api#sticker
 *
 * This object represents a sticker.
 */
class Sticker extends Type {
    /**
     * @var string Identifier for this file, which can be used to download or reuse the file
     */
    public string $fileId;

    /**
     * @var string Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public string $fileUniqueId;

    /**
     * @var string Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     */
    public string $type;

    /**
     * @var int Sticker width
     */
    public int $width;

    /**
     * @var int Sticker height
     */
    public int $height;

    /**
     * @var bool True, if the sticker is animated
     */
    public bool $isAnimated;

    /**
     * @var bool True, if the sticker is a video sticker
     */
    public bool $isVideo;

    /**
     * @var PhotoSize|null Optional. Sticker thumbnail in the .WEBP or .JPG format
     */
    public PhotoSize|null $thumbnail;

    /**
     * @var string|null Optional. Emoji associated with the sticker
     */
    public string|null $emoji;

    /**
     * @var string|null Optional. Name of the sticker set to which the sticker belongs
     */
    public string|null $setName;

    /**
     * @var File|null Optional. For premium regular stickers, premium animation for the sticker
     */
    public File|null $premiumAnimation;

    /**
     * @var MaskPosition|null Optional. For mask stickers, the position where the mask should be placed
     */
    public MaskPosition|null $maskPosition;

    /**
     * @var string|null Optional. For custom emoji stickers, unique identifier of the custom emoji
     */
    public string|null $customEmojiId;

    /**
     * @var bool|null Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     */
    public bool|null $needsRepainting;

    /**
     * @var int|null Optional. File size in bytes
     */
    public int|null $fileSize;
}
