<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method EditChatSubscriptionInviteLink
 *
 * Use this method to edit a subscription invite link created by the bot. The bot must have the can_invite_users administrator rights. Returns the edited invite link as a ChatInviteLink object.
 */
class EditChatSubscriptionInviteLink extends Method implements MethodInterface {

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
        return "editChatSubscriptionInviteLink";
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
}
