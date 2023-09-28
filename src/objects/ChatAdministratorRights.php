<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatAdministratorRights
 *
 * @link https://core.telegram.org/bots/api#chatadministratorrights
 *
 * Represents the rights of an administrator in a chat.
 *
 * @property bool $isAnonymous
 * @property bool $canManageChat
 * @property bool $canDeleteMessages
 * @property bool $canManageVideoChats
 * @property bool $canRestrictMembers
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
 */
class ChatAdministratorRights extends BaseObject { }