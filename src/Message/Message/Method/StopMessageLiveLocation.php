<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to stop updating a live location message before live_period expires. On success,
 * if the message is not an inline message, the edited Message is returned, otherwise True is
 * returned.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#stopmessagelivelocation
 */
class StopMessageLiveLocation extends Method implements MethodInterface {
    public function methodName(): string {
        return 'stopMessageLiveLocation';
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
     * Required if inline_message_id is not specified. Unique identifier for the target chat or
     * username of the target bot, supergroup or channel in the format @username .
     *
     * @param int|string $chatId Required if inline_message_id is not specified. Unique identifier
     *   for the target chat or username of the target bot, supergroup or channel in the format
     *
     *   @username .
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Required if inline_message_id is not specified. Identifier of the message with live location
     * to stop.
     *
     * @param int $messageId Required if inline_message_id is not specified. Identifier of the
     *   message with live location to stop.
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message.
     *
     * @param string $inlineMessageId Required if chat_id and message_id are not specified.
     *   Identifier of the inline message.
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }

    /**
     * A JSON-serialized object for a new inline keyboard
     *
     * @param mixed $replyMarkup A JSON-serialized object for a new inline keyboard
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
