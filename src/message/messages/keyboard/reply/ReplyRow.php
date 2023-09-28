<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\Component;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;
use uzdevid\telegram\bot\message\messages\keyboard\RowInterface;

class ReplyRow extends Component implements RowInterface {
    /**
     * @inheritDoc
     */
    public function addButton(ButtonInterface $button): static {
        $this->pushAttribute('keyboard', $button->getAttributes());
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getButtons(): array {
        return $this->getAttribute('keyboard');
    }
}