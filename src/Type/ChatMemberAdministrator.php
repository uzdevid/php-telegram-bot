<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberAdministrator
 *
 * @link https://core.telegram.org/bots/api#chatmemberadministrator
 *
 * Represents a chat member that has some additional privileges.
 */
class ChatMemberAdministrator extends Type {
    /**
     * @var string The member's status in the chat, always “administrator”
     */
    public string $status;

    /**
     * @var User Information about the user
     */
    public User $user;

    /**
     * @var bool True, if the bot is allowed to edit administrator privileges of that user
     */
    public bool $canBeEdited;

    /**
     * @var bool True, if the user's presence in the chat is hidden
     */
    public bool $isAnonymous;

    /**
     * @var bool True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
     */
    public bool $canManageChat;

    /**
     * @var bool True, if the administrator can delete messages of other users
     */
    public bool $canDeleteMessages;

    /**
     * @var bool True, if the administrator can manage video chats
     */
    public bool $canManageVideoChats;

    /**
     * @var bool True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     */
    public bool $canRestrictMembers;

    /**
     * @var bool True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     */
    public bool $canPromoteMembers;

    /**
     * @var bool True, if the user is allowed to change the chat title, photo and other settings
     */
    public bool $canChangeInfo;

    /**
     * @var bool True, if the user is allowed to invite new users to the chat
     */
    public bool $canInviteUsers;

    /**
     * @var bool True, if the administrator can post stories to the chat
     */
    public bool $canPostStories;

    /**
     * @var bool True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     */
    public bool $canEditStories;

    /**
     * @var bool True, if the administrator can delete stories posted by other users
     */
    public bool $canDeleteStories;

    /**
     * @var bool|null Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
     */
    public bool|null $canPostMessages;

    /**
     * @var bool|null Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
     */
    public bool|null $canEditMessages;

    /**
     * @var bool|null Optional. True, if the user is allowed to pin messages; for groups and supergroups only
     */
    public bool|null $canPinMessages;

    /**
     * @var bool|null Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     */
    public bool|null $canManageTopics;

    /**
     * @var bool|null Optional. True, if the administrator can manage direct messages of the channel and decline suggested posts; for channels only
     */
    public bool|null $canManageDirectMessages;

    /**
     * @var string|null Optional. Custom title for this user
     */
    public string|null $customTitle;
}
