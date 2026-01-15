<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method BanChatSenderChat
 *
 * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
 */
class BanChatSenderChat extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $senderChatId Unique identifier of the target sender chat
     */
    public function __construct(int|string $chatId, int $senderChatId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('sender_chat_id', $senderChatId);
    }

    public function methodName(): string {
        return "banChatSenderChat";
    }


}
