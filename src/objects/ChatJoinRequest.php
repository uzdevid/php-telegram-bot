<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatJoinRequest
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Represents a join request sent to a chat.
 *
 * @property Chat $chat
 * @property User $from
 * @property int $userChatId
 * @property int $date
 * @property string $bio
 * @property ChatInviteLink $inviteLink
 */
class ChatJoinRequest extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'chat' => Chat::class,
            'from' => User::class,
            'inviteLink' => ChatInviteLink::class,
        ];
    }
}