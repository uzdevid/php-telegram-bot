<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method DeleteMessages
 *
 * Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns True on success.
 */
class DeleteMessages extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param array $messageIds A JSON-serialized list of 1-100 identifiers of messages to delete. See deleteMessage for limitations on which messages can be deleted
     */
    public function __construct(int|string $chatId, array $messageIds) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_ids', $messageIds);
    }

    public function methodName(): string {
        return "deleteMessages";
    }


}
