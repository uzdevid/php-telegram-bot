<?php

namespace uzdevid\telegram\bot\objects;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends InputMedia {
    protected static string $__show_caption_above_media = 'show_caption_above_media';
    protected static string $__has_spoiler = 'has_spoiler';

    /**
     * @param string $media
     */
    public function __construct(string $media) {
        parent::__construct([
            self::$__type => 'photo',
            self::$__media => $media
        ]);
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function showCaptionAboveMedia(bool $value): static {
        $this->addAttribute(self::$__show_caption_above_media, $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function hasSpoiler(bool $value): static {
        $this->addAttribute(self::$__has_spoiler, $value);
        return $this;
    }
}