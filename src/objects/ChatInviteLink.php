<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatInviteLink
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 *
 * Represents an invite link for a chat.
 *
 * @property string $inviteLink
 * @property User $creator
 * @property bool $createsJoinRequest
 * @property bool $isPrimary
 * @property bool $isRevoked
 * @property string $name
 * @property int $expireDate
 * @property int $memberLimit
 * @property int $pendingJoinRequestsCount
 */
class ChatInviteLink extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'creator' => User::class,
        ];
    }
}