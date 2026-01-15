<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method UnbanChatMember
 *
 * Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
 */
class UnbanChatMember extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int|string $chatId, int $userId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "unbanChatMember";
    }

    /**
     * @param bool $onlyIfBanned Do nothing if the user is not banned
     *
     * @return $this
     */
    public function onlyIfBanned(bool $onlyIfBanned): static {
        $this->addAttribute('only_if_banned', $onlyIfBanned);
        return $this;
    }
}
