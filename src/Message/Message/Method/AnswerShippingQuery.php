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

    /**
     * @param string $shippingQueryId Unique identifier for the query to be answered
     * @param bool $ok Pass True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
     */
    public function __construct(string $shippingQueryId, bool $ok) {
        parent::__construct();

        $this->addAttribute('shipping_query_id', $shippingQueryId);
        $this->addAttribute('ok', $ok);
    }

    public function methodName(): string {
        return "answerShippingQuery";
    }

    /**
     * @param array $shippingOptions Required if ok is True. A JSON-serialized array of available shipping options.
     *
     * @return $this
     */
    public function shippingOptions(array $shippingOptions): static {
        $this->addAttribute('shipping_options', $shippingOptions);
        return $this;
    }

    /**
     * @param string $errorMessage Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.
     *
     * @return $this
     */
    public function errorMessage(string $errorMessage): static {
        $this->addAttribute('error_message', $errorMessage);
        return $this;
    }
}
