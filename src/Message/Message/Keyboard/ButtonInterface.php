<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard;

interface ButtonInterface {
    /**
     * @return array
     */
    public function getAttributes(): array;
}