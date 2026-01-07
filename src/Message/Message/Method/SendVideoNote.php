<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendVideoNote extends Method implements MethodInterface {
    /**
     * @param string $videoNote
     */
    public function __construct(string $videoNote) {
        parent::__construct();
        $this->addAttribute('video_note', $videoNote);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendVideoNote";
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
     * @param int $length
     * @return $this
     */
    public function length(int $length): static {
        $this->addAttribute('length', $length);
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
}