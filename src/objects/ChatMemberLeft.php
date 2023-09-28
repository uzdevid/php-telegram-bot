<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatMemberLeft
 *
 * @link https://core.telegram.org/bots/api#chatmemberleft
 *
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 *
 * @property string $status
 * @property User $user
 */
class ChatMemberLeft extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'user' => User::class,
        ];
    }
}