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
    public int $id;
    public string $type;
    public string $title;
    public string|null $username;
    public string $firstName;
    public string $lastName;
    public bool $isForum;
    public ChatPhoto $photo;
    public array $activeUsernames;
    public string $emojiStatusCustomEmojiId;
    public int $emojiStatusExpirationDate;
    public string $bio;
    public bool $hasPrivateForwards;
    public bool $hasRestrictedVoiceAndVideoMessages;
    public bool $joinToSendMessages;
    public bool $joinByRequest;
    public string $description;
    public string $inviteLink;
    public Message $pinnedMessage;
    public ChatPermissions $permissions;
    public int $slowModeDelay;
    public int $unrestrictBoostCount;
    public int $messageAutoDeleteTime;
    public bool $hasAggressiveAntiSpamEnabled;
    public bool $hasHiddenMembers;
    public bool $hasProtectedContent;
    public bool $hasVisibleHistory;
    public string $stickerSetName;
    public bool $canSetStickerSet;
    public int $linkedChatId;
    public ChatLocation $location;
}
