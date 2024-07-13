<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendVideo extends Method implements MethodInterface {
    /**
     * @param string $video
     */
    public function __construct(string $video) {
        parent::__construct();
        $this->addAttribute('video', $video);
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
        $this->addAttribute('duration', $duration);
        return $this;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function width(int $width): static {
        $this->addAttribute('width', $width);
        return $this;
    }

    /**
     * @param int $height
     *
     * @return $this
     */
    public function height(int $height): static {
        $this->addAttribute('height', $height);
        return $this;
    }

    /**
     * @param string $thumbnail
     *
     * @return $this
     */
    public function thumbnail(string $thumbnail): static {
        $this->addAttribute('thumbnail', $thumbnail);
        return $this;
    }

    /**
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param bool $hasSpoiler
     *
     * @return $this
     */
    public function hasSpoiler(bool $hasSpoiler): static {
        $this->addAttribute('has_spoiler', $hasSpoiler);
        return $this;
    }
}