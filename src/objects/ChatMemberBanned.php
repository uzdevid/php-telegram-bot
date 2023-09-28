<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatMemberBanned
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 *
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @property string $status
 * @property User $user
 * @property int $untilDate
 */
class ChatMemberBanned extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'user' => User::class,
        ];
    }
}