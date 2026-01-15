<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMember
 *
 * @link https://core.telegram.org/bots/api#chatmember
 *
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 */
class ChatMember extends Type {
    /**
     * @var string The member's status in the chat, always “creator”
     */
    public string $status;

    /**
     * @var User Information about the user
     */
    public User $user;

    /**
     * @var bool True, if the user's presence in the chat is hidden
     */
    public bool $isAnonymous;

    /**
     * @var string|null Optional. Custom title for this user
     */
    public string|null $customTitle;
}
