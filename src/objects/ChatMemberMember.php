<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatMemberMember
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @property string $status
 * @property User $user
 */
class ChatMemberMember extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'user' => User::class,
        ];
    }
}