<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Delete messages on behalf of a business account. Requires the can_delete_sent_messages business
 * bot right to delete messages sent by the bot itself, or the can_delete_all_messages business bot
 * right to delete any message. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and
 * 'message_ids' fields and dispatch the request directly.
 *
 * @link https://core.telegram.org/bots/api#deletebusinessmessages
 */
class DeleteBusinessMessages extends Method implements MethodInterface {
    /**
     * Creates a new DeleteBusinessMessages method and sets the required 'business_connection_id'
     * and 'message_ids' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which to delete the messages
     * @param array $messageIds A JSON-serialized list of 1-100 identifiers of messages to delete.
     *   All messages must be from the same chat. See deleteMessage for limitations on which
     *   messages can be deleted.
     */
    public function __construct(string $businessConnectionId, array $messageIds) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('message_ids', $messageIds);
    }

    public function methodName(): string {
        return 'deleteBusinessMessages';
    }
}
