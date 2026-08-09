<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set a custom title for an administrator in a supergroup promoted by the bot.
 * Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'custom_title' fields, then
 * chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setchatadministratorcustomtitle
 */
class SetChatAdministratorCustomTitle extends Method implements MethodInterface {
    /**
     * Creates a new SetChatAdministratorCustomTitle method and sets the required 'user_id' and
     * 'custom_title' fields.
     *
     * @param int $userId Unique identifier of the target user
     * @param string $customTitle New custom title for the administrator; 0-16 characters, emoji are
     *   not allowed
     */
    public function __construct(int $userId, string $customTitle) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('custom_title', $customTitle);
    }

    public function methodName(): string {
        return 'setChatAdministratorCustomTitle';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
