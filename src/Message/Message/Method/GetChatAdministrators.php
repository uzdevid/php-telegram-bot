<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get a list of administrators in a chat. Returns an Array of ChatMember
 * objects.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getchatadministrators
 */
class GetChatAdministrators extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getChatAdministrators';
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

    /**
     * Pass True to additionally receive all bots that are administrators of the chat. By default,
     * bots other than the current bot are omitted.
     *
     * @param bool $returnBots Pass True to additionally receive all bots that are administrators of
     *   the chat. By default, bots other than the current bot are omitted.
     * @return $this
     */
    public function returnBots(bool $returnBots = true): static {
        $this->addAttribute('return_bots', $returnBots);
        return $this;
    }
}
