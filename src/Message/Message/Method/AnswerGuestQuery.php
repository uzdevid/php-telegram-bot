<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to reply to a received guest message. On success, a SentGuestMessage object is
 * returned.
 *
 * Typical usage: instantiate the method with the required 'guest_query_id' and 'result' fields and
 * dispatch the request directly.
 *
 * @link https://core.telegram.org/bots/api#answerguestquery
 */
class AnswerGuestQuery extends Method implements MethodInterface {
    /**
     * Creates a new AnswerGuestQuery method and sets the required 'guest_query_id' and 'result'
     * fields.
     *
     * @param string $guestQueryId Unique identifier for the query to be answered
     * @param mixed $result A JSON-serialized object describing the message to be sent
     */
    public function __construct(string $guestQueryId, mixed $result) {
        parent::__construct();
        $this->addAttribute('guest_query_id', $guestQueryId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return 'answerGuestQuery';
    }
}
