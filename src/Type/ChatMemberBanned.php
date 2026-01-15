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
    /**
     * @var string The member's status in the chat, always “kicked”
     */
    public string $status;

    /**
     * @var User Information about the user
     */
    public User $user;

    /**
     * @var int Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
     */
    public int $untilDate;
}
