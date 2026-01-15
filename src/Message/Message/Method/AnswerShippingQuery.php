<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method AnswerShippingQuery
 *
 * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 */
class AnswerShippingQuery extends Method implements MethodInterface {
    public function __construct(string $shippingQueryId, bool $ok) {
        parent::__construct();
        $this->addAttribute('shipping_query_id', $shippingQueryId);
        $this->addAttribute('ok', $ok);
    }

    public function methodName(): string {
        return "answerShippingQuery";
    }

    /**
     * @param array $shippingOptions
     *
     * @return $this
     */
    public function shippingOptions(array $shippingOptions): static {
        $this->addAttribute('shipping_options', $shippingOptions);
        return $this;
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
