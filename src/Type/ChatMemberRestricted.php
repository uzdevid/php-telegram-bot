<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberRestricted
 *
 * @link https://core.telegram.org/bots/api#chatmemberrestricted
 *
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
class ChatMemberRestricted extends Type {
    public string $status;
    public User $user;
    public bool $isMember;
    public bool $canSendMessages;
    public bool $canSendAudios;
    public bool $canSendDocuments;
    public bool $canSendPhotos;
    public bool $canSendVideos;
    public bool $canSendVideoNotes;
    public bool $canSendVoiceNotes;
    public bool $canSendPolls;
    public bool $canSendOtherMessages;
    public bool $canAddWebPagePreviews;
    public bool $canChangeInfo;
    public bool $canInviteUsers;
    public bool $canPinMessages;
    public bool $canManageTopics;
    public int $untilDate;
}