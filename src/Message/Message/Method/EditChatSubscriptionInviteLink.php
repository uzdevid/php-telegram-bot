<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit a subscription invite link created by the bot. The bot must have the
 * can_invite_users administrator rights. Returns the edited invite link as a ChatInviteLink object.
 *
 * Typical usage: instantiate the method with the required 'invite_link' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#editchatsubscriptioninvitelink
 */
class EditChatSubscriptionInviteLink extends Method implements MethodInterface {
    /**
     * Creates a new EditChatSubscriptionInviteLink method and sets the required 'invite_link'
     * field.
     *
     * @param string $inviteLink The invite link to edit
     */
    public function __construct(string $inviteLink) {
        parent::__construct();
        $this->addAttribute('invite_link', $inviteLink);
    }

    public function methodName(): string {
        return 'editChatSubscriptionInviteLink';
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
     * Invite link name; 0-32 characters
     *
     * @param string $name Invite link name; 0-32 characters
     *
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }
}
