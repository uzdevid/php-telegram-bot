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
    /**
     * @var string The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     */
    public string $inviteLink;

    /**
     * @var User Creator of the link
     */
    public User $creator;

    /**
     * @var bool True, if users joining the chat via the link need to be approved by chat administrators
     */
    public bool $createsJoinRequest;

    /**
     * @var bool True, if the link is primary
     */
    public bool $isPrimary;

    /**
     * @var bool True, if the link is revoked
     */
    public bool $isRevoked;

    /**
     * @var string|null Optional. Invite link name
     */
    public string|null $name;

    /**
     * @var int|null Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     */
    public int|null $expireDate;

    /**
     * @var int|null Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     */
    public int|null $memberLimit;

    /**
     * @var int|null Optional. Number of pending join requests created using this link
     */
    public int|null $pendingJoinRequestCount;

    /**
     * @var int|null Optional. The number of seconds the subscription will be active for before the next payment
     */
    public int|null $subscriptionPeriod;

    /**
     * @var int|null Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
     */
    public int|null $subscriptionPrice;
}
