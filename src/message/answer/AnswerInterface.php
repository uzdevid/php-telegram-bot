<?php

namespace UzDevid\Telegram\Bot\Message\Answer;

interface AnswerInterface {
    /**
     * @return string
     */
    public function getType(): string;
}