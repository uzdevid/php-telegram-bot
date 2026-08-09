<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to create an additional invite link for a chat. The bot must be an administrator
 * in the chat for this to work and must have the appropriate administrator rights. The link can be
 * revoked using the method revokeChatInviteLink . Returns the new invite link as ChatInviteLink
 * object.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#createchatinvitelink
 */
class CreateChatInviteLink extends Method implements MethodInterface {
    public function methodName(): string {
        return 'createChatInviteLink';
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Invite link name; 0-32 characters
     *
     * @param string $name Invite link name; 0-32 characters
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }

    /**
     * Point in time (Unix timestamp) when the link will expire
     *
     * @param int $expireDate Point in time (Unix timestamp) when the link will expire
     * @return $this
     */
    public function expireDate(int $expireDate): static {
        $this->addAttribute('expire_date', $expireDate);
        return $this;
    }

    /**
     * The maximum number of users that can be members of the chat simultaneously after joining the
     * chat via this invite link; 1-99999
     *
     * @param int $memberLimit The maximum number of users that can be members of the chat
     *   simultaneously after joining the chat via this invite link; 1-99999
     * @return $this
     */
    public function memberLimit(int $memberLimit): static {
        $this->addAttribute('member_limit', $memberLimit);
        return $this;
    }

    /**
     * True , if users joining the chat via the link need to be approved by chat administrators. If
     * True , member_limit can't be specified.
     *
     * @param bool $createsJoinRequest True , if users joining the chat via the link need to be
     *   approved by chat administrators. If True , member_limit can't be specified.
     * @return $this
     */
    public function createsJoinRequest(bool $createsJoinRequest = true): static {
        $this->addAttribute('creates_join_request', $createsJoinRequest);
        return $this;
    }
}
