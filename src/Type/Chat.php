<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Chat
 *
 * @link https://core.telegram.org/bots/api#chat
 *
 * This object represents a chat.
 */
class Chat extends Type {
    /**
     * @var int Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $id;

    /**
     * @var string Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public string $type;

    /**
     * @var string|null Optional. Title, for supergroups, channels and group chats
     */
    public string|null $title;

    /**
     * @var string|null Optional. Username, for private chats, supergroups and channels if available
     */
    public string|null $username;

    /**
     * @var string|null Optional. First name of the other party in a private chat
     */
    public string|null $firstName;

    /**
     * @var string|null Optional. Last name of the other party in a private chat
     */
    public string|null $lastName;

    /**
     * @var bool|null Optional. True, if the supergroup chat is a forum (has topics enabled)
     */
    public bool|null $isForum;

    /**
     * @var bool|null Optional. True, if the chat is the direct messages chat of a channel
     */
    public bool|null $isDirectMessages;
}
