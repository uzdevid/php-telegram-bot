<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on
 * success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getchat
 */
class GetChat extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getChat';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup or channel in the
     * format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup or channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
