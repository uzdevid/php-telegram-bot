<?php

namespace UzDevid\Telegram\Bot\Message\Answer1\Result;

use UzDevid\Telegram\Bot\Message\Answer1\AnswerInterface;
use UzDevid\Telegram\Bot\Message\Answer1\AnswerType;

class ArticleResult extends AnswerType implements AnswerInterface {
    /**
     * @param string $id
     */
    public function __construct(string $id) {
        parent::__construct(['id' => $id, 'type' => $this->getType()]);
    }

    /**
     * @param string $title
     * @return $this
     */
    public function title(string $title): static {
        $this->addAttribute('title', $title);
        return $this;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function description(string $text): static {
        $this->mergeAttribute('input_message_content', ['description' => $text]);
        return $this;
    }

    /**
     * @param string $mode
     * @return $this
     */
    public function parseMode(string $mode): static {
        $this->mergeAttribute('input_message_content', ['parse_mode' => $mode]);
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return 'article';
    }
}