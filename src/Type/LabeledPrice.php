<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

class LabeledPrice extends Type {
    /**
     * @param string $label
     * @param int $amount
     */
    public function __construct(
        public string $label,
        public int    $amount
    ) {
    }
}