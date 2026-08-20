<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatInviteLink
 *
 * @see https://core.telegram.org/bots/api#chatinvitelink
 *
 * Represents an invite link for a chat.
 */
class ChatInviteLink extends Type {
    /**
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be
     * replaced with “…”.
     */
    public string $inviteLink;
    /**
     * Creator of the link
     */
    public User $creator;
    /**
     * True, if users joining the chat via the link need to be approved by chat administrators
     */
    public bool $createsJoinRequest;
    /**
     * True, if the link is primary
     */
    public bool $isPrimary;
    /**
     * True, if the link is revoked
     */
    public bool $isRevoked;
    /**
     * Optional. Invite link name
     */
    public string $name;
    /**
     * Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     */
    public int $expireDate;
    /**
     * Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via
     * this invite link; 1-99999
     */
    public int $memberLimit;
    public int $pendingJoinRequestsCount;
}
