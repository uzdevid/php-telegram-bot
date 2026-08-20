<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberMember
 *
 * @see https://core.telegram.org/bots/api#chatmembermember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @property string $status
 * @property User $user
 */
class ChatMemberMember extends Type {
    /**
     * The member's status in the chat, always “member”
     */
    public string $status;
    /**
     * Information about the user
     */
    public User $user;
}
