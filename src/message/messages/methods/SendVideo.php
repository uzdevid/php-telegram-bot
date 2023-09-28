<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class SendVideo extends Method implements MethodInterface {
    protected static string $__video = 'video';
    protected static string $__duration = 'duration';
    protected static string $__width = 'width';
    protected static string $__height = 'height';
    protected static string $__thumbnail = 'thumbnail';
    protected static string $__caption = 'caption';
    protected static string $__hasSpoiler = 'has_spoiler';
    protected static string $__supportsStreaming = 'supports_streaming';

    public function __construct(string $video, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__video, $video);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendVideo";
    }

    /**
     * @param int $duration
     *
     * @return $this
     */
    public function duration(int $duration): static {
        $this->addAttribute(self::$__duration, $duration);
        return $this;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function width(int $width): static {
        $this->addAttribute(self::$__width, $width);
        return $this;
    }

    /**
     * @param int $height
     *
     * @return $this
     */
    public function height(int $height): static {
        $this->addAttribute(self::$__height, $height);
        return $this;
    }

    /**
     * @param string $thumbnail
     *
     * @return $this
     */
    public function thumbnail(string $thumbnail): static {
        $this->addAttribute(self::$__thumbnail, $thumbnail);
        return $this;
    }

    /**
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute(self::$__caption, $caption);
        return $this;
    }

    /**
     * @param bool $hasSpoiler
     *
     * @return $this
     */
    public function hasSpoiler(bool $hasSpoiler): static {
        $this->addAttribute(self::$__hasSpoiler, $hasSpoiler);
        return $this;
    }
}