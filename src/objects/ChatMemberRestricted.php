<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatMemberRestricted
 *
 * @link https://core.telegram.org/bots/api#chatmemberrestricted
 *
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 *
 * @property string $status
 * @property User $user
 * @property bool $isMember
 * @property bool $canSendMessages
 * @property bool $canSendAudios
 * @property bool $canSendDocuments
 * @property bool $canSendPhotos
 * @property bool $canSendVideos
 * @property bool $canSendVideoNotes
 * @property bool $canSendVoiceNotes
 * @property bool $canSendPolls
 * @property bool $canSendOtherMessages
 * @property bool $canAddWebPagePreviews
 * @property bool $canChangeInfo
 * @property bool $canInviteUsers
 * @property bool $canPinMessages
 * @property bool $canManageTopics
 * @property int $untilDate
 */
class ChatMemberRestricted extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'user' => User::class,
        ];
    }
}