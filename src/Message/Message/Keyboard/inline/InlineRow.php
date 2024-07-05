<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\inline;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ButtonInterface;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\RowInterface;

class InlineRow implements RowInterface {
    use AttributeContainer;

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