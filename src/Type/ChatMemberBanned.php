<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberBanned
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 *
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
class ChatMemberBanned extends Type {
    public string $status;
    public User $user;
    public int $untilDate;
}