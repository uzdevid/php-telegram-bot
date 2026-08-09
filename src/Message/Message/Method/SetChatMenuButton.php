<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the bot's menu button in a private chat, or the default menu button.
 * Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#setchatmenubutton
 */
class SetChatMenuButton extends Method implements MethodInterface {
    public function methodName(): string {
        return 'setChatMenuButton';
    }

    /**
     * Unique identifier for the target private chat. If not specified, the bot's default menu
     * button will be changed.
     *
     * @param int $chatId Unique identifier for the target private chat. If not specified, the bot's
     *   default menu button will be changed.
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault .
     *
     * @param mixed $menuButton A JSON-serialized object for the bot's new menu button. Defaults to
     *   MenuButtonDefault .
     *
     * @return $this
     */
    public function menuButton(mixed $menuButton): static {
        $this->addAttribute('menu_button', $menuButton);
        return $this;
    }
}
