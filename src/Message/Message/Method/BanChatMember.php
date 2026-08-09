<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups
 * and channels, the user will not be able to return to the chat on their own using invite links,
 * etc., unless unbanned first. The bot must be an administrator in the chat for this to work and
 * must have the appropriate administrator rights. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#banchatmember
 */
class BanChatMember extends Method implements MethodInterface {
    /**
     * Creates a new BanChatMember method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'banChatMember';
    }

    /**
     * Unique identifier for the target group or username of the target supergroup or channel in the
     * format @username
     *
     * @param int|string $chatId Unique identifier for the target group or username of the target
     *   supergroup or channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or
     * less than 30 seconds from the current time they are considered to be banned forever. Applied
     * for supergroups and channels only.
     *
     * @param int $untilDate Date when the user will be unbanned; Unix time. If user is banned for
     *   more than 366 days or less than 30 seconds from the current time they are considered to be
     *   banned forever. Applied for supergroups and channels only.
     * @return $this
     */
    public function untilDate(int $untilDate): static {
        $this->addAttribute('until_date', $untilDate);
        return $this;
    }

    /**
     * Pass True to delete all messages from the chat for the user that is being removed. If False ,
     * the user will be able to see messages in the group that were sent before the user was
     * removed. Always True for supergroups and channels.
     *
     * @param bool $revokeMessages Pass True to delete all messages from the chat for the user that
     *   is being removed. If False , the user will be able to see messages in the group that were
     *   sent before the user was removed. Always True for supergroups and channels.
     * @return $this
     */
    public function revokeMessages(bool $revokeMessages = true): static {
        $this->addAttribute('revoke_messages', $revokeMessages);
        return $this;
    }
}
