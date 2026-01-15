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
    public function __construct(int|string $chatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "verifyChat";
    }

    /**
     * @param string $customDescription
     *
     * @return $this
     */
    public function customDescription(string $customDescription): static {
        $this->addAttribute('custom_description', $customDescription);
        return $this;
    }
}
