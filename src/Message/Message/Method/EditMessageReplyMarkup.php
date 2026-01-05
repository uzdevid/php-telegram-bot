<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class EditMessageReplyMarkup extends Method implements MethodInterface {
    /**
     * @param ReplyMarkupInterface $replyMarkup
     */
    public function __construct(ReplyMarkupInterface $replyMarkup) {
        parent::__construct();
        $this->addAttribute('reply_markup', (string)$replyMarkup);
    }

    public function methodName(): string {
        return 'editMessageReplyMarkup';
    }
}