<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method AnswerPreCheckoutQuery
 *
 * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an Update with the field pre_checkout_query. Use this method to respond to such pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 */
class AnswerPreCheckoutQuery extends Method implements MethodInterface {
    public function __construct(string $preCheckoutQueryId, bool $ok) {
        parent::__construct();
        $this->addAttribute('pre_checkout_query_id', $preCheckoutQueryId);
        $this->addAttribute('ok', $ok);
    }

    public function methodName(): string {
        return "answerPreCheckoutQuery";
    }

    /**
     * @param string $errorMessage
     *
     * @return $this
     */
    public function errorMessage(string $errorMessage): static {
        $this->addAttribute('error_message', $errorMessage);
        return $this;
    }
}
