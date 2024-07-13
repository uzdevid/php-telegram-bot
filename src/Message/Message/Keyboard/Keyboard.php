<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard;

use UzDevid\Telegram\Bot\Core\AttributeContainer;

abstract class Keyboard {
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
}