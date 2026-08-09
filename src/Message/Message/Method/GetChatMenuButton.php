<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the current value of the bot's menu button in a private chat, or the
 * default menu button. Returns MenuButton on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#getchatmenubutton
 */
class GetChatMenuButton extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getChatMenuButton';
    }

    /**
     * Unique identifier for the target private chat. If not specified, the bot's default menu
     * button will be returned.
     *
     * @param int $chatId Unique identifier for the target private chat. If not specified, the bot's
     *   default menu button will be returned.
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
