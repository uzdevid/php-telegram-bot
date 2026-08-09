<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an
 * administrator in the chat for this to work and must have the appropriate administrator rights.
 * Pass False for all boolean parameters to demote a user. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#promotechatmember
 */
class PromoteChatMember extends Method implements MethodInterface {
    /**
     * Creates a new PromoteChatMember method and sets the required 'user_id' field.
     *
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int $userId) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return 'promoteChatMember';
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Pass True if the administrator's presence in the chat is hidden
     *
     * @param bool $isAnonymous Pass True if the administrator's presence in the chat is hidden
     *
     * @return $this
     */
    public function isAnonymous(bool $isAnonymous = true): static {
        $this->addAttribute('is_anonymous', $isAnonymous);
        return $this;
    }

    /**
     * Pass True if the administrator can access the chat event log, get boost list, see hidden
     * supergroup and channel members, report spam messages, ignore slow mode, and send messages to
     * the chat without paying Telegram Stars. Implied by any other administrator privilege.
     *
     * @param bool $canManageChat Pass True if the administrator can access the chat event log, get
     *   boost list, see hidden supergroup and channel members, report spam messages, ignore slow
     *   mode, and send messages to the chat without paying Telegram Stars. Implied by any other
     *   administrator privilege.
     *
     * @return $this
     */
    public function canManageChat(bool $canManageChat = true): static {
        $this->addAttribute('can_manage_chat', $canManageChat);
        return $this;
    }

    /**
     * Pass True if the administrator can delete messages of other users
     *
     * @param bool $canDeleteMessages Pass True if the administrator can delete messages of other
     *   users
     *
     * @return $this
     */
    public function canDeleteMessages(bool $canDeleteMessages = true): static {
        $this->addAttribute('can_delete_messages', $canDeleteMessages);
        return $this;
    }

    /**
     * Pass True if the administrator can manage video chats
     *
     * @param bool $canManageVideoChats Pass True if the administrator can manage video chats
     *
     * @return $this
     */
    public function canManageVideoChats(bool $canManageVideoChats = true): static {
        $this->addAttribute('can_manage_video_chats', $canManageVideoChats);
        return $this;
    }

    /**
     * Pass True if the administrator can restrict, ban or unban chat members, or access supergroup
     * statistics. For backward compatibility, defaults to True for promotions of channel
     * administrators.
     *
     * @param bool $canRestrictMembers Pass True if the administrator can restrict, ban or unban
     *   chat members, or access supergroup statistics. For backward compatibility, defaults to True
     *   for promotions of channel administrators.
     *
     * @return $this
     */
    public function canRestrictMembers(bool $canRestrictMembers = true): static {
        $this->addAttribute('can_restrict_members', $canRestrictMembers);
        return $this;
    }

    /**
     * Pass True if the administrator can add new administrators with a subset of their own
     * privileges or demote administrators that they have promoted, directly or indirectly (promoted
     * by administrators that were appointed by him)
     *
     * @param bool $canPromoteMembers Pass True if the administrator can add new administrators with
     *   a subset of their own privileges or demote administrators that they have promoted, directly
     *   or indirectly (promoted by administrators that were appointed by him)
     *
     * @return $this
     */
    public function canPromoteMembers(bool $canPromoteMembers = true): static {
        $this->addAttribute('can_promote_members', $canPromoteMembers);
        return $this;
    }

    /**
     * Pass True if the administrator can change chat title, photo and other settings
     *
     * @param bool $canChangeInfo Pass True if the administrator can change chat title, photo and
     *   other settings
     *
     * @return $this
     */
    public function canChangeInfo(bool $canChangeInfo = true): static {
        $this->addAttribute('can_change_info', $canChangeInfo);
        return $this;
    }

    /**
     * Pass True if the administrator can invite new users to the chat
     *
     * @param bool $canInviteUsers Pass True if the administrator can invite new users to the chat
     *
     * @return $this
     */
    public function canInviteUsers(bool $canInviteUsers = true): static {
        $this->addAttribute('can_invite_users', $canInviteUsers);
        return $this;
    }

    /**
     * Pass True if the administrator can post stories to the chat
     *
     * @param bool $canPostStories Pass True if the administrator can post stories to the chat
     *
     * @return $this
     */
    public function canPostStories(bool $canPostStories = true): static {
        $this->addAttribute('can_post_stories', $canPostStories);
        return $this;
    }

    /**
     * Pass True if the administrator can edit stories posted by other users, post stories to the
     * chat page, pin chat stories, and access the chat's story archive
     *
     * @param bool $canEditStories Pass True if the administrator can edit stories posted by other
     *   users, post stories to the chat page, pin chat stories, and access the chat's story archive
     *
     * @return $this
     */
    public function canEditStories(bool $canEditStories = true): static {
        $this->addAttribute('can_edit_stories', $canEditStories);
        return $this;
    }

    /**
     * Pass True if the administrator can delete stories posted by other users
     *
     * @param bool $canDeleteStories Pass True if the administrator can delete stories posted by
     *   other users
     *
     * @return $this
     */
    public function canDeleteStories(bool $canDeleteStories = true): static {
        $this->addAttribute('can_delete_stories', $canDeleteStories);
        return $this;
    }

    /**
     * Pass True if the administrator can post messages in the channel, approve suggested posts, or
     * access channel statistics; for channels only
     *
     * @param bool $canPostMessages Pass True if the administrator can post messages in the channel,
     *   approve suggested posts, or access channel statistics; for channels only
     *
     * @return $this
     */
    public function canPostMessages(bool $canPostMessages = true): static {
        $this->addAttribute('can_post_messages', $canPostMessages);
        return $this;
    }

    /**
     * Pass True if the administrator can edit messages of other users and can pin messages; for
     * channels only
     *
     * @param bool $canEditMessages Pass True if the administrator can edit messages of other users
     *   and can pin messages; for channels only
     *
     * @return $this
     */
    public function canEditMessages(bool $canEditMessages = true): static {
        $this->addAttribute('can_edit_messages', $canEditMessages);
        return $this;
    }

    /**
     * Pass True if the administrator can pin messages; for supergroups only
     *
     * @param bool $canPinMessages Pass True if the administrator can pin messages; for supergroups
     *   only
     *
     * @return $this
     */
    public function canPinMessages(bool $canPinMessages = true): static {
        $this->addAttribute('can_pin_messages', $canPinMessages);
        return $this;
    }

    /**
     * Pass True if the user is allowed to create, rename, close, and reopen forum topics; for
     * supergroups only
     *
     * @param bool $canManageTopics Pass True if the user is allowed to create, rename, close, and
     *   reopen forum topics; for supergroups only
     *
     * @return $this
     */
    public function canManageTopics(bool $canManageTopics = true): static {
        $this->addAttribute('can_manage_topics', $canManageTopics);
        return $this;
    }

    /**
     * Pass True if the administrator can manage direct messages within the channel and decline
     * suggested posts; for channels only
     *
     * @param bool $canManageDirectMessages Pass True if the administrator can manage direct
     *   messages within the channel and decline suggested posts; for channels only
     *
     * @return $this
     */
    public function canManageDirectMessages(bool $canManageDirectMessages = true): static {
        $this->addAttribute('can_manage_direct_messages', $canManageDirectMessages);
        return $this;
    }

    /**
     * Pass True if the administrator can edit the tags of regular members; for groups and
     * supergroups only
     *
     * @param bool $canManageTags Pass True if the administrator can edit the tags of regular
     *   members; for groups and supergroups only
     *
     * @return $this
     */
    public function canManageTags(bool $canManageTags = true): static {
        $this->addAttribute('can_manage_tags', $canManageTags);
        return $this;
    }
}
