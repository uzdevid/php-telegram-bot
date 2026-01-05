<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendPhoto extends Method implements MethodInterface {
    protected static string $__photo = 'photo';
    protected static string $__caption = 'caption';
    protected static string $__hasSpoiler = 'has_spoiler';

    /**
     * @param string $photo
     */
    public function __construct(string $photo) {
        parent::__construct();
        $this->addAttribute('photo', $photo);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendPhoto";
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
     * @param string $mode
     *
     * @return $this
     */
    public function parseMode(string $mode): static {
        $this->addAttribute('parse_mode', $mode);
        return $this;
    }

    /**
     * @param bool $hasSpoiler
     *
     * @return $this
     */
    public function hasSpoiler(bool $hasSpoiler = true): static {
        $this->addAttribute('has_spoiler', $hasSpoiler);
        return $this;
    }
}