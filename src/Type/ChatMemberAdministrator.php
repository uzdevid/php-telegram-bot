<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberAdministrator
 *
 * @see https://core.telegram.org/bots/api#chatmemberadministrator
 *
 * Represents a chat member that has some additional privileges.
 */
class ChatMemberAdministrator extends Type {
    /**
     * The member's status in the chat, always “administrator”
     */
    public string $status;
    /**
     * Information about the user
     */
    public User $user;
    /**
     * True, if the bot is allowed to edit administrator privileges of that user
     */
    public bool $canBeEdited;
    /**
     * True, if the user's presence in the chat is hidden
     */
    public bool $isAnonymous;
    /**
     * True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel
     * members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars.
     * Implied by any other administrator privilege.
     */
    public bool $canManageChat;
    /**
     * True, if the administrator can delete messages of other users
     */
    public bool $canDeleteMessages;
    /**
     * True, if the administrator can manage video chats
     */
    public bool $canManageVideoChats;
    /**
     * True, if the administrator can restrict, ban or unban chat members, or access supergroup statistics
     */
    public bool $canRestrictMembers;
    /**
     * True, if the administrator can add new administrators with a subset of their own privileges or demote
     * administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed
     * by the user)
     */
    public bool $canPromoteMembers;
    /**
     * True, if the user is allowed to change the chat title, photo and other settings
     */
    public bool $canChangeInfo;
    /**
     * True, if the user is allowed to invite new users to the chat
     */
    public bool $canInviteUsers;
    /**
     * Optional. True, if the administrator can post messages in the channel, approve suggested posts, or access
     * channel statistics; for channels only
     */
    public bool $canPostMessages;
    /**
     * Optional. True, if the administrator can edit messages of other users and can pin messages; for channels only
     */
    public bool $canEditMessages;
    /**
     * Optional. True, if the user is allowed to pin messages; for groups and supergroups only
     */
    public bool $canPinMessages;
    /**
     * True, if the administrator can post stories to the chat
     */
    public bool $canPostStories;
    /**
     * True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat
     * stories, and access the chat's story archive
     */
    public bool $canEditStories;
    /**
     * True, if the administrator can delete stories posted by other users
     */
    public bool $canDeleteStories;
    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     */
    public bool $canManageTopics;
    /**
     * Optional. Custom title for this user
     */
    public string $customTitle;
}
