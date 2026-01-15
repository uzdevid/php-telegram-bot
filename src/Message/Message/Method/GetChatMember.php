<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetChatMember
 *
 * Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
 */
class GetChatMember extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int|string $chatId, int $userId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "getChatMember";
    }


}
