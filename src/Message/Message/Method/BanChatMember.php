<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method BanChatMember
 *
 * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 */
class BanChatMember extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $userId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "banChatMember";
    }

    /**
     * @param int $untilDate
     *
     * @return $this
     */
    public function untilDate(int $untilDate): static {
        $this->addAttribute('until_date', $untilDate);
        return $this;
    }

    /**
     * @param bool $revokeMessages
     *
     * @return $this
     */
    public function revokeMessages(bool $revokeMessages): static {
        $this->addAttribute('revoke_messages', $revokeMessages);
        return $this;
    }
}
