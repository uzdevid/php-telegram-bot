<?php

namespace UzDevid\Telegram\Bot\Message\Answer\Result;

use UzDevid\Telegram\Bot\Message\Answer\AnswerInterface;
use UzDevid\Telegram\Bot\Message\Answer\AnswerType;

class ArticleResult extends AnswerType implements AnswerInterface {
    /**
     * @param string $id
     * @param string $title
     * @param string $description
     */
    public function __construct(string $id, string $title, string $description) {
        $type = $this->getType();
        $input_message_content = ['message_text' => $description, 'parse_mode' => 'HTML'];

        parent::__construct(compact('id', 'title', 'description', 'type', 'input_message_content'));
    }

    /**
     * @return string
     */
    public function getType(): string {
        return 'article';
    }
}