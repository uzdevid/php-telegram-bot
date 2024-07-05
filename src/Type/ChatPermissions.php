<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatPermissions
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends Type {
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
}