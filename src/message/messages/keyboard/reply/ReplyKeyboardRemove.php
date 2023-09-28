<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\Component;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;

class ReplyKeyboardRemove extends Component implements ReplyMarkupInterface {
    public function __construct() {
        parent::__construct();
        $this->addAttribute('remove_keyboard', true);
    }

    /**
     * @param bool $selective
     *
     * @return $this
     */
    public function selective(bool $selective): self {
        $this->addAttribute('selective', $selective);
        return $this;
    }
}