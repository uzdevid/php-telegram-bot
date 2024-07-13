<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendAudio extends Method implements MethodInterface {
    /**
     * @param string $audio
     */
    public function __construct(string $audio) {
        parent::__construct();
        $this->addAttribute('audio', $audio);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendAudio";
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
     * @param int $duration
     *
     * @return $this
     */
    public function duration(int $duration): static {
        $this->addAttribute('duration', $duration);
        return $this;
    }

    /**
     * @param string $performer
     *
     * @return $this
     */
    public function performer(string $performer): static {
        $this->addAttribute('performer', $performer);
        return $this;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function title(string $title): static {
        $this->addAttribute('title', $title);
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