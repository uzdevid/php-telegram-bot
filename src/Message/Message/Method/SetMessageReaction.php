<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Method SetMessageReaction
 *
 * Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns True on success.
 */
class SetMessageReaction extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $messageId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "setMessageReaction";
    }

    /**
     * @param array $reaction
     *
     * @return $this
     */
    public function reaction(array $reaction): static {
        $this->addAttribute('reaction', $reaction);
        return $this;
    }

    /**
     * @param bool $isBig
     *
     * @return $this
     */
    public function isBig(bool $isBig): static {
        $this->addAttribute('is_big', $isBig);
        return $this;
    }
}
