<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\MenuButton;

/**
 * Method SetChatMenuButton
 *
 * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 */
class SetChatMenuButton extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "setChatMenuButton";
    }

    /**
     * @param int $chatId Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param MenuButton $menuButton A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
     *
     * @return $this
     */
    public function menuButton(MenuButton $menuButton): static {
        $this->addAttribute('menu_button', $menuButton);
        return $this;
    }
}
