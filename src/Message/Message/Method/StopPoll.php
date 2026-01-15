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
    public function __construct(int|string $chatId, int $messageId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "stopPoll";
    }

    /**
     * @param string $businessConnectionId
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
