<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetGameHighScores
 *
 * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
 */
class GetGameHighScores extends Method implements MethodInterface {

    /**
     * @param int $userId Target user id
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "getGameHighScores";
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
