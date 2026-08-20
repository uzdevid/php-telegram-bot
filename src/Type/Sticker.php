<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Sticker
 *
 * @see https://core.telegram.org/bots/api#sticker
 *
 * This object represents a sticker.
 */
class Sticker extends Type {
    /**
     * Identifier for this file, which can be used to download or reuse the file
     */
    public string $fileId;
    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be
     * used to download or reuse the file.
     */
    public string $fileUniqueId;
    /**
     * Sticker width
     */
    public int $width;
    /**
     * Sticker height
     */
    public int $height;
    /**
     * True, if the sticker is animated
     */
    public bool $isAnimated;
    /**
     * True, if the sticker is a video sticker
     */
    public bool $isVideo;
    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     */
    public PhotoSize $thumbnail;
    /**
     * Optional. Emoji associated with the sticker
     */
    public string $emoji;
    /**
     * Optional. Name of the sticker set to which the sticker belongs
     */
    public string $setName;
    /**
     * Optional. For premium regular stickers, premium animation for the sticker
     */
    public File $premiumAnimation;
    /**
     * Optional. For mask stickers, the position where the mask should be placed
     */
    public MaskPosition $maskPosition;
    /**
     * Optional. For custom emoji stickers, unique identifier of the custom emoji
     */
    public string $customEmojiId;
    /**
     * Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium
     * badge in emoji status, white color on chat photos, or another appropriate color in other places
     */
    public bool $needsRepainting;
    /**
     * Optional. File size in bytes
     */
    public int $fileSize;
}
