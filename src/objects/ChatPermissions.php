<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatPermissions
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
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
 */
class ChatPermissions extends BaseObject { }