<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetChatMenuButton
 *
 * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
 */
class GetChatMenuButton extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "getChatMenuButton";
    }

    /**
     * @param int $chatId Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
