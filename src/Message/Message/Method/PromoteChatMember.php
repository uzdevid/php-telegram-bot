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
    public function __construct(int|string $chatId, int $userId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
    }

    public function methodName(): string {
        return "promoteChatMember";
    }

    /**
     * @param bool $isAnonymous
     *
     * @return $this
     */
    public function isAnonymous(bool $isAnonymous): static {
        $this->addAttribute('is_anonymous', $isAnonymous);
        return $this;
    }

    /**
     * @param bool $canManageChat
     *
     * @return $this
     */
    public function canManageChat(bool $canManageChat): static {
        $this->addAttribute('can_manage_chat', $canManageChat);
        return $this;
    }

    /**
     * @param bool $canDeleteMessages
     *
     * @return $this
     */
    public function canDeleteMessages(bool $canDeleteMessages): static {
        $this->addAttribute('can_delete_messages', $canDeleteMessages);
        return $this;
    }

    /**
     * @param bool $canManageVideoChats
     *
     * @return $this
     */
    public function canManageVideoChats(bool $canManageVideoChats): static {
        $this->addAttribute('can_manage_video_chats', $canManageVideoChats);
        return $this;
    }

    /**
     * @param bool $canRestrictMembers
     *
     * @return $this
     */
    public function canRestrictMembers(bool $canRestrictMembers): static {
        $this->addAttribute('can_restrict_members', $canRestrictMembers);
        return $this;
    }

    /**
     * @param bool $canPromoteMembers
     *
     * @return $this
     */
    public function canPromoteMembers(bool $canPromoteMembers): static {
        $this->addAttribute('can_promote_members', $canPromoteMembers);
        return $this;
    }

    /**
     * @param bool $canChangeInfo
     *
     * @return $this
     */
    public function canChangeInfo(bool $canChangeInfo): static {
        $this->addAttribute('can_change_info', $canChangeInfo);
        return $this;
    }

    /**
     * @param bool $canInviteUsers
     *
     * @return $this
     */
    public function canInviteUsers(bool $canInviteUsers): static {
        $this->addAttribute('can_invite_users', $canInviteUsers);
        return $this;
    }

    /**
     * @param bool $canPostStories
     *
     * @return $this
     */
    public function canPostStories(bool $canPostStories): static {
        $this->addAttribute('can_post_stories', $canPostStories);
        return $this;
    }

    /**
     * @param bool $canEditStories
     *
     * @return $this
     */
    public function canEditStories(bool $canEditStories): static {
        $this->addAttribute('can_edit_stories', $canEditStories);
        return $this;
    }

    /**
     * @param bool $canDeleteStories
     *
     * @return $this
     */
    public function canDeleteStories(bool $canDeleteStories): static {
        $this->addAttribute('can_delete_stories', $canDeleteStories);
        return $this;
    }

    /**
     * @param bool $canPostMessages
     *
     * @return $this
     */
    public function canPostMessages(bool $canPostMessages): static {
        $this->addAttribute('can_post_messages', $canPostMessages);
        return $this;
    }

    /**
     * @param bool $canEditMessages
     *
     * @return $this
     */
    public function canEditMessages(bool $canEditMessages): static {
        $this->addAttribute('can_edit_messages', $canEditMessages);
        return $this;
    }

    /**
     * @param bool $canPinMessages
     *
     * @return $this
     */
    public function canPinMessages(bool $canPinMessages): static {
        $this->addAttribute('can_pin_messages', $canPinMessages);
        return $this;
    }

    /**
     * @param bool $canManageTopics
     *
     * @return $this
     */
    public function canManageTopics(bool $canManageTopics): static {
        $this->addAttribute('can_manage_topics', $canManageTopics);
        return $this;
    }

    /**
     * @param bool $canManageDirectMessages
     *
     * @return $this
     */
    public function canManageDirectMessages(bool $canManageDirectMessages): static {
        $this->addAttribute('can_manage_direct_messages', $canManageDirectMessages);
        return $this;
    }
}
