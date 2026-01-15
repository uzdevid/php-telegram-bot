<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method ReadBusinessMessage
 *
 * Marks incoming message as read on behalf of a business account. Requires the can_read_messages business bot right. Returns True on success.
 */
class ReadBusinessMessage extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which to read the message
     * @param int $chatId Unique identifier of the chat in which the message was received. The chat must have been active in the last 24 hours.
     * @param int $messageId Unique identifier of the message to mark as read
     */
    public function __construct(string $businessConnectionId, int $chatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "readBusinessMessage";
    }


}
