<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberLeft
 *
 * @link https://core.telegram.org/bots/api#chatmemberleft
 *
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
class ChatMemberLeft extends Type {
    /**
     * @var string The member's status in the chat, always “left”
     */
    public string $status;

    /**
     * @var User Information about the user
     */
    public User $user;
}
