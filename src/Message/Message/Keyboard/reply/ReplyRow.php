<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\reply;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ButtonInterface;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\RowInterface;

class ReplyRow implements RowInterface {
    use AttributeContainer;

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