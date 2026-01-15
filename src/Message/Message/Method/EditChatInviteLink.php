<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method EditChatInviteLink
 *
 * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
 */
class EditChatInviteLink extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $inviteLink The invite link to edit
     */
    public function __construct(int|string $chatId, string $inviteLink) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('invite_link', $inviteLink);
    }

    public function methodName(): string {
        return "editChatInviteLink";
    }

    /**
     * @param string $name Invite link name; 0-32 characters
     *
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }

    /**
     * @param int $expireDate Point in time (Unix timestamp) when the link will expire
     *
     * @return $this
     */
    public function expireDate(int $expireDate): static {
        $this->addAttribute('expire_date', $expireDate);
        return $this;
    }

    /**
     * @param int $memberLimit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *
     * @return $this
     */
    public function memberLimit(int $memberLimit): static {
        $this->addAttribute('member_limit', $memberLimit);
        return $this;
    }

    /**
     * @param bool $createsJoinRequest True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
     *
     * @return $this
     */
    public function createsJoinRequest(bool $createsJoinRequest): static {
        $this->addAttribute('creates_join_request', $createsJoinRequest);
        return $this;
    }
}
