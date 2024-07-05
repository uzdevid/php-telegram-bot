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
    public int $id;
    public string $type;
    public string $title;
    public string|null $username;
    public string $firstName;
    public string $lastName;
    public bool $isForum;
    public bool $chatPhoto;
    public array $activeUsernames;
    public string $emojiStatusCustomEmojiId;
    public string $bio;
    public bool $hasPrivateForwards;
    public bool $hasRestrictedVoiceAndVideoMessages;
    public bool $joinToSendMessages;
    public bool $joinByRequest;
    public string $description;
    public string $inviteLink;
    public int $pinnedMessage;
    public int $permissions;
    public int $slowModeDelay;
    public int $messageAutoDeleteTime;
    public bool $hasAggressiveAntiSpamEnabled;
    public bool $hasHiddenMembers;
    public bool $hasProtectedContent;
    public string $stickerSetName;
    public bool $canSetStickerSet;
    public bool $linkedChatId;
    public bool $location;
}