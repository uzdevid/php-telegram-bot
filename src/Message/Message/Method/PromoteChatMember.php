<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method PromoteChatMember
 *
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
 */
class PromoteChatMember extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int $userId Unique identifier of the target user
     */
    public function __construct(int|string $chatId, int $userId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "promoteChatMember";
    }

    /**
     * @param bool $isAnonymous Pass True if the administrator's presence in the chat is hidden
     *
     * @return $this
     */
    public function isAnonymous(bool $isAnonymous): static {
        $this->addAttribute('is_anonymous', $isAnonymous);
        return $this;
    }

    /**
     * @param bool $canManageChat Pass True if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other administrator privilege.
     *
     * @return $this
     */
    public function canManageChat(bool $canManageChat): static {
        $this->addAttribute('can_manage_chat', $canManageChat);
        return $this;
    }

    /**
     * @param bool $canDeleteMessages Pass True if the administrator can delete messages of other users
     *
     * @return $this
     */
    public function canDeleteMessages(bool $canDeleteMessages): static {
        $this->addAttribute('can_delete_messages', $canDeleteMessages);
        return $this;
    }

    /**
     * @param bool $canManageVideoChats Pass True if the administrator can manage video chats
     *
     * @return $this
     */
    public function canManageVideoChats(bool $canManageVideoChats): static {
        $this->addAttribute('can_manage_video_chats', $canManageVideoChats);
        return $this;
    }

    /**
     * @param bool $canRestrictMembers Pass True if the administrator can restrict, ban or unban chat members, or access supergroup statistics. For backward compatibility, defaults to True for promotions of channel administrators
     *
     * @return $this
     */
    public function canRestrictMembers(bool $canRestrictMembers): static {
        $this->addAttribute('can_restrict_members', $canRestrictMembers);
        return $this;
    }

    /**
     * @param bool $canPromoteMembers Pass True if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
     *
     * @return $this
     */
    public function canPromoteMembers(bool $canPromoteMembers): static {
        $this->addAttribute('can_promote_members', $canPromoteMembers);
        return $this;
    }

    /**
     * @param bool $canChangeInfo Pass True if the administrator can change chat title, photo and other settings
     *
     * @return $this
     */
    public function canChangeInfo(bool $canChangeInfo): static {
        $this->addAttribute('can_change_info', $canChangeInfo);
        return $this;
    }

    /**
     * @param bool $canInviteUsers Pass True if the administrator can invite new users to the chat
     *
     * @return $this
     */
    public function canInviteUsers(bool $canInviteUsers): static {
        $this->addAttribute('can_invite_users', $canInviteUsers);
        return $this;
    }

    /**
     * @param bool $canPostStories Pass True if the administrator can post stories to the chat
     *
     * @return $this
     */
    public function canPostStories(bool $canPostStories): static {
        $this->addAttribute('can_post_stories', $canPostStories);
        return $this;
    }

    /**
     * @param bool $canEditStories Pass True if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
     *
     * @return $this
     */
    public function canEditStories(bool $canEditStories): static {
        $this->addAttribute('can_edit_stories', $canEditStories);
        return $this;
    }

    /**
     * @param bool $canDeleteStories Pass True if the administrator can delete stories posted by other users
     *
     * @return $this
     */
    public function canDeleteStories(bool $canDeleteStories): static {
        $this->addAttribute('can_delete_stories', $canDeleteStories);
        return $this;
    }

    /**
     * @param bool $canPostMessages Pass True if the administrator can post messages in the channel, approve suggested posts, or access channel statistics; for channels only
     *
     * @return $this
     */
    public function canPostMessages(bool $canPostMessages): static {
        $this->addAttribute('can_post_messages', $canPostMessages);
        return $this;
    }

    /**
     * @param bool $canEditMessages Pass True if the administrator can edit messages of other users and can pin messages; for channels only
     *
     * @return $this
     */
    public function canEditMessages(bool $canEditMessages): static {
        $this->addAttribute('can_edit_messages', $canEditMessages);
        return $this;
    }

    /**
     * @param bool $canPinMessages Pass True if the administrator can pin messages; for supergroups only
     *
     * @return $this
     */
    public function canPinMessages(bool $canPinMessages): static {
        $this->addAttribute('can_pin_messages', $canPinMessages);
        return $this;
    }

    /**
     * @param bool $canManageTopics Pass True if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only
     *
     * @return $this
     */
    public function canManageTopics(bool $canManageTopics): static {
        $this->addAttribute('can_manage_topics', $canManageTopics);
        return $this;
    }

    /**
     * @param bool $canManageDirectMessages Pass True if the administrator can manage direct messages within the channel and decline suggested posts; for channels only
     *
     * @return $this
     */
    public function canManageDirectMessages(bool $canManageDirectMessages): static {
        $this->addAttribute('can_manage_direct_messages', $canManageDirectMessages);
        return $this;
    }
}
