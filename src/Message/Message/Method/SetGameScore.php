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

    /**
     * @param int $userId User identifier
     * @param int $score New score, must be non-negative
     */
    public function __construct(int $userId, int $score) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('score', $score);
    }

    public function methodName(): string {
        return "setGameScore";
    }

    /**
     * @param bool $force Pass True if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     *
     * @return $this
     */
    public function force(bool $force): static {
        $this->addAttribute('force', $force);
        return $this;
    }

    /**
     * @param bool $disableEditMessage Pass True if the game message should not be automatically edited to include the current scoreboard
     *
     * @return $this
     */
    public function disableEditMessage(bool $disableEditMessage): static {
        $this->addAttribute('disable_edit_message', $disableEditMessage);
        return $this;
    }

    /**
     * @param int $chatId Required if inline_message_id is not specified. Unique identifier for the target chat
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param int $messageId Required if inline_message_id is not specified. Identifier of the sent message
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * @param string $inlineMessageId Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }
}
