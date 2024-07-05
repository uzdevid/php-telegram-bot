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
    public string $status;
    public User $user;
}