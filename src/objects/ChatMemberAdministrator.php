<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatMemberAdministrator
 *
 * @link https://core.telegram.org/bots/api#chatmemberadministrator
 *
 * Represents a chat member that has some additional privileges.
 *
 * @property string $status
 * @property User $user
 * @property bool $canBeEdited
 * @property bool $isAnonymous
 * @property bool $canManageChat
 * @property bool $canDeleteMessages
 * @property bool $canManageVideoChats
 * @property bool canRestrictMembers
 * @property bool $canPromoteMembers
 * @property bool $canChangeInfo
 * @property bool $canInviteUsers
 * @property bool $canPostMessages
 * @property bool $canEditMessages
 * @property bool $canPinMessages
 * @property bool $canPostStories
 * @property bool $canEditStories
 * @property bool $canDeleteStories
 * @property bool $canManageTopics
 * @property string $customTitle
 */
class ChatMemberAdministrator extends BaseObject { }