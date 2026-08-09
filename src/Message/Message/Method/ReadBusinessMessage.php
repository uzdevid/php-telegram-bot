<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Marks incoming message as read on behalf of a business account. Requires the can_read_messages
 * business bot right. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and 'message_id'
 * fields, then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#readbusinessmessage
 */
class ReadBusinessMessage extends Method implements MethodInterface {
    /**
     * Creates a new ReadBusinessMessage method and sets the required 'business_connection_id' and
     * 'message_id' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which to read the message
     * @param int $messageId Unique identifier of the message to mark as read
     */
    public function __construct(string $businessConnectionId, int $messageId) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'readBusinessMessage';
    }

    /**
     * Unique identifier of the chat in which the message was received. The chat must have been
     * active in the last 24 hours.
     *
     * @param int $chatId Unique identifier of the chat in which the message was received. The chat
     *   must have been active in the last 24 hours.
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
