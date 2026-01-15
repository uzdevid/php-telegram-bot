<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineQueryResult;

/**
 * Method AnswerWebAppQuery
 *
 * Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
 */
class AnswerWebAppQuery extends Method implements MethodInterface {

    /**
     * @param string $webAppQueryId Unique identifier for the query to be answered
     * @param InlineQueryResult $result A JSON-serialized object describing the message to be sent
     */
    public function __construct(string $webAppQueryId, InlineQueryResult $result) {
        parent::__construct();

        $this->addAttribute('web_app_query_id', $webAppQueryId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return "answerWebAppQuery";
    }


}
