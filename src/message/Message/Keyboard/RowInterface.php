<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard;

interface RowInterface {
    /**
     * @param ButtonInterface $button
     *
     * @return $this
     */
    public function addButton(ButtonInterface $button): static;

    /**
     * @return array
     */
    public function getButtons(): array;
}