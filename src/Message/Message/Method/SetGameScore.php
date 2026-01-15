<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetGameScore
 *
 * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the Message is returned, otherwise True is returned. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
 */
class SetGameScore extends Method implements MethodInterface {
    public function __construct(int $userId, int $score) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('score', $score);
    }

    public function methodName(): string {
        return "setGameScore";
    }

    /**
     * @param bool $force
     *
     * @return $this
     */
    public function force(bool $force): static {
        $this->addAttribute('force', $force);
        return $this;
    }

    /**
     * @param bool $disableEditMessage
     *
     * @return $this
     */
    public function disableEditMessage(bool $disableEditMessage): static {
        $this->addAttribute('disable_edit_message', $disableEditMessage);
        return $this;
    }

    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param int $messageId
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * @param string $inlineMessageId
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }
}
