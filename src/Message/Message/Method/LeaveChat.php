<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#leavechat
 */
class LeaveChat extends Method implements MethodInterface {
    public function methodName(): string {
        return 'leaveChat';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup or channel in the
     * format @username . Channel direct messages chats aren't supported; leave the corresponding
     * channel instead.
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup or channel in the format @username . Channel direct messages chats aren't
     *   supported; leave the corresponding channel instead.
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
