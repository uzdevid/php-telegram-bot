<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified,
 * the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply
 * to shipping queries. On success, True is returned.
 *
 * Typical usage: instantiate the method with the required 'shipping_query_id' and 'ok' fields, then
 * chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#answershippingquery
 */
class AnswerShippingQuery extends Method implements MethodInterface {
    /**
     * Creates a new AnswerShippingQuery method and sets the required 'shipping_query_id' and 'ok'
     * fields.
     *
     * @param string $shippingQueryId Unique identifier for the query to be answered
     * @param bool $ok Pass True if delivery to the specified address is possible and False if there
     *   are any problems (for example, if delivery to the specified address is not possible)
     */
    public function __construct(string $shippingQueryId, bool $ok = true) {
        parent::__construct();
        $this->addAttribute('shipping_query_id', $shippingQueryId);
        $this->addAttribute('ok', $ok);
    }

    public function methodName(): string {
        return 'answerShippingQuery';
    }

    /**
     * Required if ok is True . A JSON-serialized Array of available shipping options.
     *
     * @param array $shippingOptions Required if ok is True . A JSON-serialized Array of available
     *   shipping options.
     *
     * @return $this
     */
    public function shippingOptions(array $shippingOptions): static {
        $this->addAttribute('shipping_options', $shippingOptions);
        return $this;
    }

    /**
     * Adds one item to the shipping_options list. Required if ok is True . A JSON-serialized Array
     * of available shipping options.
     *
     * @param mixed $shippingOption Adds one item to the shipping_options list. Required if ok is
     *   True . A JSON-serialized Array of available shipping options.
     *
     * @return $this
     */
    public function addShippingOption(mixed $shippingOption): static {
        $this->pushAttribute('shipping_options', $shippingOption);
        return $this;
    }

    /**
     * Required if ok is False . Error message in human readable form that explains why it is
     * impossible to complete the order (e.g. “Sorry, delivery to your desired address is
     * unavailable”). Telegram will display this message to the user.
     *
     * @param string $errorMessage Required if ok is False . Error message in human readable form
     *   that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your
     *   desired address is unavailable”). Telegram will display this message to the user.
     *
     * @return $this
     */
    public function errorMessage(string $errorMessage): static {
        $this->addAttribute('error_message', $errorMessage);
        return $this;
    }
}
