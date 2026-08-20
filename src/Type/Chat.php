<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Chat
 *
 * @see https://core.telegram.org/bots/api#chat
 *
 * This object represents a chat.
 */
class Chat extends Type {
    /**
     * Unique identifier for this chat. This number may have more than 32 significant bits and some programming
     * languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a
     * signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $id;
    /**
     * Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public string $type;
    /**
     * Optional. Title, for supergroups, channels and group chats
     */
    public string $title;
    /**
     * Optional. Username, for private chats, supergroups and channels if available
     */
    public string|null $username;
    /**
     * Optional. First name of the other party in a private chat
     */
    public string $firstName;
    /**
     * Optional. Last name of the other party in a private chat
     */
    public string $lastName;
    /**
     * Optional. True, if the supergroup chat is a forum (has topics enabled)
     */
    public bool $isForum;
    /**
     * Optional. Chat photo
     */
    public ChatPhoto $photo;
    /**
     * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
     */
    public array $activeUsernames;
    /**
     * Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     */
    public string $emojiStatusCustomEmojiId;
    /**
     * Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if
     * any
     */
    public int $emojiStatusExpirationDate;
    /**
     * Optional. Bio of the other party in a private chat
     */
    public string $bio;
    /**
     * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id>
     * links only in chats with the user
     */
    public bool $hasPrivateForwards;
    /**
     * Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the
     * private chat
     */
    public bool $hasRestrictedVoiceAndVideoMessages;
    /**
     * Optional. True, if users need to join the supergroup before they can send messages
     */
    public bool $joinToSendMessages;
    /**
     * Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by
     * supergroup administrators
     */
    public bool $joinByRequest;
    /**
     * Optional. Description, for groups, supergroups and channel chats
     */
    public string $description;
    /**
     * Optional. Primary invite link, for groups, supergroups and channel chats
     */
    public string $inviteLink;
    /**
     * Optional. The most recent pinned message (by sending date)
     */
    public Message $pinnedMessage;
    /**
     * Optional. Default chat member permissions, for groups and supergroups
     */
    public ChatPermissions $permissions;
    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged
     * user; in seconds
     */
    public int $slowModeDelay;
    /**
     * Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to
     * ignore slow mode and chat permissions
     */
    public int $unrestrictBoostCount;
    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
     */
    public int $messageAutoDeleteTime;
    /**
     * Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to
     * chat administrators.
     */
    public bool $hasAggressiveAntiSpamEnabled;
    /**
     * Optional. True, if non-administrators can only get the list of bots and administrators in the chat
     */
    public bool $hasHiddenMembers;
    /**
     * Optional. True, if messages from the chat can't be forwarded to other chats
     */
    public bool $hasProtectedContent;
    /**
     * Optional. True, if new chat members will have access to old messages; available only to chat administrators
     */
    public bool $hasVisibleHistory;
    /**
     * Optional. For supergroups, name of the group sticker set
     */
    public string $stickerSetName;
    /**
     * Optional. True, if the bot can change the group sticker set
     */
    public bool $canSetStickerSet;
    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice
     * versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming
     * languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64
     * bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $linkedChatId;
    /**
     * Optional. For supergroups, the location to which the supergroup is connected
     */
    public ChatLocation $location;
}
