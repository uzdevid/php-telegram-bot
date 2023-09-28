<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\force;

use uzdevid\telegram\bot\Component;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;

class ForceReply extends Component implements ReplyMarkupInterface {
    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute('force_reply', true);
    }

    /**
     * @param string $inputFieldPlaceholder
     *
     * @return $this
     */
    public
    function inputFieldPlaceholder(string $inputFieldPlaceholder): self {
        $this->addAttribute('input_field_placeholder', $inputFieldPlaceholder);
        return $this;
    }

    /**
     * @param bool $selective
     *
     * @return $this
     */
    public
    function selective(bool $selective = true): self {
        $this->addAttribute('selective', $selective);
        return $this;
    }
}