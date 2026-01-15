<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteBusinessMessages
 *
 * Delete messages on behalf of a business account. Requires the can_delete_sent_messages business bot right to delete messages sent by the bot itself, or the can_delete_all_messages business bot right to delete any message. Returns True on success.
 */
class DeleteBusinessMessages extends Method implements MethodInterface {
    public function __construct(string $businessConnectionId, array $messageIds) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('message_ids', $messageIds);
    }

    public function methodName(): string {
        return "deleteBusinessMessages";
    }


}
