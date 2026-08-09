<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard;

use UzDevid\Telegram\Bot\Core\AttributeContainer;

abstract class Keyboard implements ReplyMarkupInterface {
    use AttributeContainer;

    protected string $name;

    /**
     * @param RowInterface $row
     *
     * @return $this
     */
    public function addRow(RowInterface $row): self {
        $this->pushAttribute($this->name, $row->getButtons());
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array {
        return $this->attributes;
    }

    /**
     * @return string
     */
    public function __toString(): string {
        return json_encode($this->attributes, \JSON_THROW_ON_ERROR | \JSON_UNESCAPED_UNICODE);
    }
}
