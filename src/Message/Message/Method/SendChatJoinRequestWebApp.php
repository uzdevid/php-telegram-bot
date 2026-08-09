<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to process a received chat join request query by showing a Mini App to the user
 * before deciding the outcome. Call answerChatJoinRequestQuery to resolve the join request query
 * based on the user interaction with the Mini App. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'chat_join_request_query_id' and
 * 'web_app_url' fields and dispatch the request directly.
 *
 * @see https://core.telegram.org/bots/api#sendchatjoinrequestwebapp
 */
class SendChatJoinRequestWebApp extends Method implements MethodInterface {
    /**
     * Creates a new SendChatJoinRequestWebApp method and sets the required
     * 'chat_join_request_query_id' and 'web_app_url' fields.
     *
     * @param string $chatJoinRequestQueryId Unique identifier of the join request query
     * @param string $webAppUrl An HTTPS URL of a Web App to be opened with additional data as
     *   specified in Initializing Web Apps
     */
    public function __construct(string $chatJoinRequestQueryId, string $webAppUrl) {
        parent::__construct();
        $this->addAttribute('chat_join_request_query_id', $chatJoinRequestQueryId);
        $this->addAttribute('web_app_url', $webAppUrl);
    }

    public function methodName(): string {
        return 'sendChatJoinRequestWebApp';
    }
}
