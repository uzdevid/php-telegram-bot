<?php

namespace UzDevid\Telegram\Bot\Message\Message\Keyboard\Force;

use JsonException;
use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;

class ForceReply implements ReplyMarkupInterface {
    use AttributeContainer;

    public function __construct() {
        $this->addAttribute('force_reply', true);
    }

    /**
     * @param string $inputFieldPlaceholder
     *
     * @return $this
     */
    public function inputFieldPlaceholder(string $inputFieldPlaceholder): self {
        $this->addAttribute('input_field_placeholder', $inputFieldPlaceholder);
        return $this;
    }

    /**
     * @param bool $selective
     *
     * @return $this
     */
    public function selective(bool $selective = true): self {
        $this->addAttribute('selective', $selective);
        return $this;
    }

    /**
     * @throws JsonException
     */
    public function __toString(): string {
        return json_encode($this->attributes, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }
}