<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatFullInfo
 *
 * @link https://core.telegram.org/bots/api#chatfullinfo
 *
 * This object contains full information about a chat.
 */
class ChatFullInfo extends Type {
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

    /**
     * @var int Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
     */
    public int $accentColorId;

    /**
     * @var int The maximum number of reactions that can be set on a message in the chat
     */
    public int $maxReactionCount;

    /**
     * @var ChatPhoto|null Optional. Chat photo
     */
    public ChatPhoto|null $photo;

    /**
     * @var string[]|null Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
     */
    public array|null $activeUsernames;

    /**
     * @var Birthdate|null Optional. For private chats, the date of birth of the user
     */
    public Birthdate|null $birthdate;

    /**
     * @var BusinessIntro|null Optional. For private chats with business accounts, the intro of the business
     */
    public BusinessIntro|null $businessIntro;

    /**
     * @var BusinessLocation|null Optional. For private chats with business accounts, the location of the business
     */
    public BusinessLocation|null $businessLocation;

    /**
     * @var BusinessOpeningHours|null Optional. For private chats with business accounts, the opening hours of the business
     */
    public BusinessOpeningHours|null $businessOpeningHours;

    /**
     * @var Chat|null Optional. For private chats, the personal channel of the user
     */
    public Chat|null $personalChat;

    /**
     * @var Chat|null Optional. Information about the corresponding channel chat; for direct messages chats only
     */
    public Chat|null $parentChat;

    /**
     * @var ReactionType[]|null Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
     */
    public array|null $availableReactions;

    /**
     * @var string|null Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
     */
    public string|null $backgroundCustomEmojiId;

    /**
     * @var int|null Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
     */
    public int|null $profileAccentColorId;

    /**
     * @var string|null Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
     */
    public string|null $profileBackgroundCustomEmojiId;

    /**
     * @var string|null Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     */
    public string|null $emojiStatusCustomEmojiId;

    /**
     * @var int|null Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
     */
    public int|null $emojiStatusExpirationDate;

    /**
     * @var string|null Optional. Bio of the other party in a private chat
     */
    public string|null $bio;

    /**
     * @var bool|null Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user
     */
    public bool|null $hasPrivateForwards;

    /**
     * @var bool|null Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
     */
    public bool|null $hasRestrictedVoiceAndVideoMessages;

    /**
     * @var bool|null Optional. True, if users need to join the supergroup before they can send messages
     */
    public bool|null $joinToSendMessages;

    /**
     * @var bool|null Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
     */
    public bool|null $joinByRequest;

    /**
     * @var string|null Optional. Description, for groups, supergroups and channel chats
     */
    public string|null $description;

    /**
     * @var string|null Optional. Primary invite link, for groups, supergroups and channel chats
     */
    public string|null $inviteLink;

    /**
     * @var Message|null Optional. The most recent pinned message (by sending date)
     */
    public Message|null $pinnedMessage;

    /**
     * @var ChatPermissions|null Optional. Default chat member permissions, for groups and supergroups
     */
    public ChatPermissions|null $permissions;

    /**
     * @var AcceptedGiftTypes Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
     */
    public AcceptedGiftTypes $acceptedGiftTypes;

    /**
     * @var bool|null Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
     */
    public bool|null $canSendPaidMedia;

    /**
     * @var int|null Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
     */
    public int|null $slowModeDelay;

    /**
     * @var int|null Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
     */
    public int|null $unrestrictBoostCount;

    /**
     * @var int|null Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
     */
    public int|null $messageAutoDeleteTime;

    /**
     * @var bool|null Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     */
    public bool|null $hasAggressiveAntiSpamEnabled;

    /**
     * @var bool|null Optional. True, if non-administrators can only get the list of bots and administrators in the chat
     */
    public bool|null $hasHiddenMembers;

    /**
     * @var bool|null Optional. True, if messages from the chat can't be forwarded to other chats
     */
    public bool|null $hasProtectedContent;

    /**
     * @var bool|null Optional. True, if new chat members will have access to old messages; available only to chat administrators
     */
    public bool|null $hasVisibleHistory;

    /**
     * @var string|null Optional. For supergroups, name of the group sticker set
     */
    public string|null $stickerSetName;

    /**
     * @var bool|null Optional. True, if the bot can change the group sticker set
     */
    public bool|null $canSetStickerSet;

    /**
     * @var string|null Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
     */
    public string|null $customEmojiStickerSetName;

    /**
     * @var int|null Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     */
    public int|null $linkedChatId;

    /**
     * @var ChatLocation|null Optional. For supergroups, the location to which the supergroup is connected
     */
    public ChatLocation|null $location;

    /**
     * @var UserRating|null Optional. For private chats, the rating of the user if any
     */
    public UserRating|null $rating;

    /**
     * @var UniqueGiftColors|null Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
     */
    public UniqueGiftColors|null $uniqueGiftColors;

    /**
     * @var int|null Optional. The number of Telegram Stars a general user have to pay to send a message to the chat
     */
    public int|null $paidMessageStarCount;
}
