<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatMemberOwner
 *
 * @link https://core.telegram.org/bots/api#chatmemberowner
 *
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @property string $status
 * @property User $user
 * @property bool $isAnonymous
 * @property string $customTitle
 */
class ChatMemberOwner extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'user' => User::class,
        ];
    }
}