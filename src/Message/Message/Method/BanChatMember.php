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
        return "banChatMember";
    }

    /**
     * @param int $untilDate Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     *
     * @return $this
     */
    public function untilDate(int $untilDate): static {
        $this->addAttribute('until_date', $untilDate);
        return $this;
    }

    /**
     * @param bool $revokeMessages Pass True to delete all messages from the chat for the user that is being removed. If False, the user will be able to see messages in the group that were sent before the user was removed. Always True for supergroups and channels.
     *
     * @return $this
     */
    public function revokeMessages(bool $revokeMessages): static {
        $this->addAttribute('revoke_messages', $revokeMessages);
        return $this;
    }
}
