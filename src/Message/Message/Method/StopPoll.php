<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;

/**
 * Method StopPoll
 *
 * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 */
class StopPoll extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $messageId Identifier of the original message with the poll
     */
    public function __construct(int|string $chatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "stopPoll";
    }

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message to be edited was sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for a new message inline keyboard.
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
