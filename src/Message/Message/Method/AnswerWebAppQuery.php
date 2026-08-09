<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set the result of an interaction with a Web App and send a corresponding
 * message on behalf of the user to the chat from which the query originated. On success, a
 * SentWebAppMessage object is returned.
 *
 * Typical usage: instantiate the method with the required 'web_app_query_id' and 'result' fields
 * and dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#answerwebappquery
 */
class AnswerWebAppQuery extends Method implements MethodInterface {
    /**
     * Creates a new AnswerWebAppQuery method and sets the required 'web_app_query_id' and 'result'
     * fields.
     *
     * @param string $webAppQueryId Unique identifier for the query to be answered
     * @param mixed $result A JSON-serialized object describing the message to be sent
     */
    public function __construct(string $webAppQueryId, mixed $result) {
        parent::__construct();
        $this->addAttribute('web_app_query_id', $webAppQueryId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return 'answerWebAppQuery';
    }
}
