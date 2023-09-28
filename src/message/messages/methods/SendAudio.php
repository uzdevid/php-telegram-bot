<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class SendAudio extends Method implements MethodInterface {
    protected static string $__audio = 'audio';
    protected static string $__caption = 'caption';
    protected static string $__duration = 'duration';
    protected static string $__performer = 'performer';
    protected static string $__title = 'title';
    protected static string $__thumbnail = 'thumbnail';

    public function __construct(string $audio, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__audio, $audio);
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
        $this->addAttribute(self::$__caption, $caption);
        return $this;
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
     * @param string $performer
     *
     * @return $this
     */
    public function performer(string $performer): static {
        $this->addAttribute(self::$__performer, $performer);
        return $this;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function title(string $title): static {
        $this->addAttribute(self::$__title, $title);
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
}