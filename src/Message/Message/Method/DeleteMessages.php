<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to delete multiple messages simultaneously. If some of the specified messages
 * can't be found, they are skipped. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'message_ids' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#deletemessages
 */
class DeleteMessages extends Method implements MethodInterface {
    /**
     * Creates a new DeleteMessages method and sets the required 'message_ids' field.
     *
     * @param array $messageIds A JSON-serialized list of 1-100 identifiers of messages to delete.
     *   See deleteMessage for limitations on which messages can be deleted.
     */
    public function __construct(array $messageIds) {
        parent::__construct();
        $this->addAttribute('message_ids', $messageIds);
    }

    public function methodName(): string {
        return 'deleteMessages';
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
