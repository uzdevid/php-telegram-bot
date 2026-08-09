<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is
 * returned.
 *
 * Typical usage: instantiate the method with the required 'message_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#stoppoll
 */
class StopPoll extends Method implements MethodInterface {
    /**
     * Creates a new StopPoll method and sets the required 'message_id' field.
     *
     * @param int $messageId Identifier of the original message with the poll
     */
    public function __construct(int $messageId) {
        parent::__construct();
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'stopPoll';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message to be edited was
     * sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message to be edited was sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * A JSON-serialized object for a new message inline keyboard
     *
     * @param mixed $replyMarkup A JSON-serialized object for a new message inline keyboard
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
