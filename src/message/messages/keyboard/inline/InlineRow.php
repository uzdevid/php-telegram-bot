<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\inline;

use uzdevid\telegram\bot\Component;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;
use uzdevid\telegram\bot\message\messages\keyboard\RowInterface;

class InlineRow extends Component implements RowInterface {
    /**
     * @param ButtonInterface $button
     *
     * @return $this
     */
    public function addButton(ButtonInterface $button): static {
        $this->pushAttribute('inline_keyboard', $button->getAttributes());
        return $this;
    }

    /**
     * @return array
     */
    public function getButtons(): array {
        return $this->getAttribute('inline_keyboard');
    }
}