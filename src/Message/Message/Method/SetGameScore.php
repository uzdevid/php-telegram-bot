<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set the score of the specified user in a game message. On success, if the
 * message is not an inline message, the Message is returned, otherwise True is returned. Returns an
 * error, if the new score is not greater than the user's current score in the chat and force is
 * False .
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'score' fields, then chain
 * optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setgamescore
 */
class SetGameScore extends Method implements MethodInterface {
    /**
     * Creates a new SetGameScore method and sets the required 'user_id' and 'score' fields.
     *
     * @param int $userId User identifier
     * @param int $score New score, must be non-negative
     */
    public function __construct(int $userId, int $score) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('score', $score);
    }

    public function methodName(): string {
        return 'setGameScore';
    }

    /**
     * Pass True if the high score is allowed to decrease. This can be useful when fixing mistakes
     * or banning cheaters.
     *
     * @param bool $force Pass True if the high score is allowed to decrease. This can be useful
     *   when fixing mistakes or banning cheaters.
     * @return $this
     */
    public function force(bool $force = true): static {
        $this->addAttribute('force', $force);
        return $this;
    }

    /**
     * Pass True if the game message should not be automatically edited to include the current
     * scoreboard
     *
     * @param bool $disableEditMessage Pass True if the game message should not be automatically
     *   edited to include the current scoreboard
     * @return $this
     */
    public function disableEditMessage(bool $disableEditMessage = true): static {
        $this->addAttribute('disable_edit_message', $disableEditMessage);
        return $this;
    }

    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat.
     *
     * @param int $chatId Required if inline_message_id is not specified. Unique identifier for the
     *   target chat.
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Required if inline_message_id is not specified. Identifier of the sent message.
     *
     * @param int $messageId Required if inline_message_id is not specified. Identifier of the sent
     *   message.
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message.
     *
     * @param string $inlineMessageId Required if chat_id and message_id are not specified.
     *   Identifier of the inline message.
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }
}
