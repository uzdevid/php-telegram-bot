<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method VerifyChat
 *
 * Verifies a chat on behalf of the organization which is represented by the bot. Returns True on success.
 */
class VerifyChat extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername). Channel direct messages chats can't be verified.
     */
    public function __construct(int|string $chatId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "verifyChat";
    }

    /**
     * @param string $customDescription Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.
     *
     * @return $this
     */
    public function customDescription(string $customDescription): static {
        $this->addAttribute('custom_description', $customDescription);
        return $this;
    }
}
