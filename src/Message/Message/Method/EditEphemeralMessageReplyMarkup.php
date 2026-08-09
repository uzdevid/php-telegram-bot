<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit only the reply markup of an ephemeral message. Note that it is not
 * guaranteed that the user will receive the message edit event, especially if they are offline. On
 * success, True is returned.
 *
 * Typical usage: instantiate the method with the required 'receiver_user_id' and
 * 'ephemeral_message_id' fields, then chain optional builder methods before dispatching the
 * request.
 *
 * @link https://core.telegram.org/bots/api#editephemeralmessagereplymarkup
 */
class EditEphemeralMessageReplyMarkup extends Method implements MethodInterface {
    /**
     * Creates a new EditEphemeralMessageReplyMarkup method and sets the required 'receiver_user_id'
     * and 'ephemeral_message_id' fields.
     *
     * @param int $receiverUserId Identifier of the user who received the message
     * @param int $ephemeralMessageId Identifier of the ephemeral message to edit
     */
    public function __construct(int $receiverUserId, int $ephemeralMessageId) {
        parent::__construct();
        $this->addAttribute('receiver_user_id', $receiverUserId);
        $this->addAttribute('ephemeral_message_id', $ephemeralMessageId);
    }

    public function methodName(): string {
        return 'editEphemeralMessageReplyMarkup';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * A JSON-serialized object for an inline keyboard
     *
     * @param mixed $replyMarkup A JSON-serialized object for an inline keyboard
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
