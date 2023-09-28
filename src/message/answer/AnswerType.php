<?php

namespace uzdevid\telegram\bot\message\answer;

use uzdevid\telegram\bot\BaseBot;

class AnswerType extends BaseBot {
    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }
}