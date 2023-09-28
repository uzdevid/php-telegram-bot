<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\inline;

use uzdevid\telegram\bot\Component;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;

class InlineButton extends Component implements ButtonInterface {
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