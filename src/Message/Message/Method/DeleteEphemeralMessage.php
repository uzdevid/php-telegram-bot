<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to delete an ephemeral message. Note that it is not guaranteed that the user will
 * receive the message deletion event, especially if they are offline. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'receiver_user_id' and
 * 'ephemeral_message_id' fields, then chain optional builder methods before dispatching the
 * request.
 *
 * @see https://core.telegram.org/bots/api#deleteephemeralmessage
 */
class DeleteEphemeralMessage extends Method implements MethodInterface {
    /**
     * Creates a new DeleteEphemeralMessage method and sets the required 'receiver_user_id' and
     * 'ephemeral_message_id' fields.
     *
     * @param int $receiverUserId Identifier of the user who received the message
     * @param int $ephemeralMessageId Identifier of the ephemeral message to delete
     */
    public function __construct(int $receiverUserId, int $ephemeralMessageId) {
        parent::__construct();
        $this->addAttribute('receiver_user_id', $receiverUserId);
        $this->addAttribute('ephemeral_message_id', $ephemeralMessageId);
    }

    public function methodName(): string {
        return 'deleteEphemeralMessage';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
