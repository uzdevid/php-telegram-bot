<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\Inline;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ButtonInterface;

class InlineButton implements ButtonInterface {
    use AttributeContainer;

    /**
     * @param string $text
     *
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param string $callbackData
     *
     * @return $this
     */
    public function callbackData(string $callbackData): static {
        $this->addAttribute('callback_data', $callbackData);
        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url): static {
        $this->addAttribute('url', $url);
        return $this;
    }
}