<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberOwner
 *
 * @see https://core.telegram.org/bots/api#chatmemberowner
 *
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends Type {
    /**
     * The member's status in the chat, always “creator”
     */
    public string $status;
    /**
     * Information about the user
     */
    public User $user;
    /**
     * True, if the user's presence in the chat is hidden
     */
    public bool $isAnonymous;
    /**
     * Optional. Custom title for this user
     */
    public string $customTitle;
}
