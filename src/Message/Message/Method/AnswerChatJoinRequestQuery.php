<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to process a received chat join request query. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'chat_join_request_query_id' and 'result'
 * fields and dispatch the request directly.
 *
 * @link https://core.telegram.org/bots/api#answerchatjoinrequestquery
 */
class AnswerChatJoinRequestQuery extends Method implements MethodInterface {
    /**
     * Creates a new AnswerChatJoinRequestQuery method and sets the required
     * 'chat_join_request_query_id' and 'result' fields.
     *
     * @param string $chatJoinRequestQueryId Unique identifier of the join request query
     * @param string $result Result of the query. Must be either “approve” to allow the user to join
     *   the chat, “decline” to disallow the user to join the chat, or “queue” to leave the decision
     *   to other administrators.
     */
    public function __construct(string $chatJoinRequestQueryId, string $result) {
        parent::__construct();
        $this->addAttribute('chat_join_request_query_id', $chatJoinRequestQueryId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return 'answerChatJoinRequestQuery';
    }
}
