<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\reply;

use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;

class ReplyKeyboardRemove implements ReplyMarkupInterface {
    use AttributeContainer;

    public function __construct() {
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