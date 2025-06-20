<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class AnswerPreCheckoutQuery extends Method implements MethodInterface {
    /**
     * @param string $preCheckoutQueryId
     * @param bool $ok
     * @param string|null $errorMessage
     */
    public function __construct(string $preCheckoutQueryId, bool $ok = true, string $errorMessage = null) {
        parent::__construct();

        $this->addAttribute('pre_checkout_query_id', $preCheckoutQueryId);
        $this->addAttribute('ok', $ok);

        if ($ok === false) {
            $this->addAttribute('error_message', $errorMessage);
        }
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'answerPreCheckoutQuery';
    }
}