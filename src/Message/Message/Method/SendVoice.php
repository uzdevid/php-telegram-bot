<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendVoice extends Method implements MethodInterface {
    /**
     * @param string $voice
     */
    public function __construct(string $voice) {
        parent::__construct();
        $this->addAttribute('voice', $voice);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendVoice";
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
}