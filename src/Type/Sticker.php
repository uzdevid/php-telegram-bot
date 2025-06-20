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
    public string $fileId;
    public string $fileUniqueId;
    public int $width;
    public int $height;
    public bool $isAnimated;
    public bool $isVideo;
    public PhotoSize $thumbnail;
    public string $emoji;
    public string $setName;
    public File $premiumAnimation;
    public MaskPosition $maskPosition;
    public string $customEmojiId;
    public bool $needsRepainting;
    public int $fileSize;
}