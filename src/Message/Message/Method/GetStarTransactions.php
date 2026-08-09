<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Returns the bot's Telegram Star transactions in chronological order. On success, returns a
 * StarTransactions object.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getstartransactions
 */
class GetStarTransactions extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getStarTransactions';
    }

    /**
     * Number of transactions to skip in the response
     *
     * @param int $offset Number of transactions to skip in the response
     * @return $this
     */
    public function offset(int $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * The maximum number of transactions to be retrieved. Values between 1-100 are accepted.
     * Defaults to 100.
     *
     * @param int $limit The maximum number of transactions to be retrieved. Values between 1-100
     *   are accepted. Defaults to 100.
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }
}
