<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberMember
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember extends Type {
    /**
     * @var string The member's status in the chat, always “member”
     */
    public string $status;

    /**
     * @var User Information about the user
     */
    public User $user;

    /**
     * @var int|null Optional. Date when the user's subscription will expire; Unix time
     */
    public int|null $untilDate;
}
