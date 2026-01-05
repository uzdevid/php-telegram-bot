<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\Reply;

use JsonException;
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

    /**
     * @return string
     * @throws JsonException
     */
    public function __toString(): string {
        return json_encode($this->attributes, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }
}