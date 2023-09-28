<?php

namespace uzdevid\telegram\bot\message\answer\results;

use uzdevid\telegram\bot\message\answer\AnswerInterface;
use uzdevid\telegram\bot\message\answer\AnswerType;

class ArticleResult extends AnswerType implements AnswerInterface {

    public function __construct(string $id, string $title, string $description) {
        $type = $this->getType();
        $input_message_content = ['message_text' => $description, 'parse_mode' => 'HTML'];

        parent::__construct(compact('id', 'title', 'description', 'type', 'input_message_content'));
    }

    public function getType(): string {
        return 'article';
    }
}