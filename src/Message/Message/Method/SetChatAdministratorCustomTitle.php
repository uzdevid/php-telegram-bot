<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetChatAdministratorCustomTitle
 *
 * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
 */
class SetChatAdministratorCustomTitle extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int $userId Unique identifier of the target user
     * @param string $customTitle New custom title for the administrator; 0-16 characters, emoji are not allowed
     */
    public function __construct(int|string $chatId, int $userId, string $customTitle) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('custom_title', $customTitle);
    }

    public function methodName(): string {
        return "setChatAdministratorCustomTitle";
    }


}
