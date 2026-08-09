<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the number of members in a chat. Returns Integer on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getchatmembercount
 */
class GetChatMemberCount extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getChatMemberCount';
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
