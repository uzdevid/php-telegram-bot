<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatInviteLink
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 *
 * Represents an invite link for a chat.
 */
class ChatInviteLink extends Type {
    public string $inviteLink;
    public User $creator;
    public bool $createsJoinRequest;
    public bool $isPrimary;
    public bool $isRevoked;
    public string $name;
    public int $expireDate;
    public int $memberLimit;
    public int $pendingJoinRequestsCount;
}