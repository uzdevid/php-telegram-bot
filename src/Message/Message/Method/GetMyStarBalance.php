<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetMyStarBalance
 *
 * A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success, returns a StarAmount object.
 */
class GetMyStarBalance extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "getMyStarBalance";
    }

    /**
     * @param int $offset Number of transactions to skip in the response
     *
     * @return $this
     */
    public function offset(int $offset): static {
        $this->addAttribute('offset', $offset);
        return $this;
    }

    /**
     * @param int $limit The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return $this
     */
    public function limit(int $limit): static {
        $this->addAttribute('limit', $limit);
        return $this;
    }
}
