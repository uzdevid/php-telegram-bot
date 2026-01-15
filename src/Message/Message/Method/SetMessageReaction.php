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

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $messageId Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
     */
    public function __construct(int|string $chatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "setMessageReaction";
    }

    /**
     * @param array $reaction A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
     *
     * @return $this
     */
    public function reaction(array $reaction): static {
        $this->addAttribute('reaction', $reaction);
        return $this;
    }

    /**
     * @param bool $isBig Pass True to set the reaction with a big animation
     *
     * @return $this
     */
    public function isBig(bool $isBig): static {
        $this->addAttribute('is_big', $isBig);
        return $this;
    }
}
