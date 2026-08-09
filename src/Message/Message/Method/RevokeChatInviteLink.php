<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a
 * new link is automatically generated. The bot must be an administrator in the chat for this to
 * work and must have the appropriate administrator rights. Returns the revoked invite link as
 * ChatInviteLink object.
 *
 * Typical usage: instantiate the method with the required 'invite_link' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#revokechatinvitelink
 */
class RevokeChatInviteLink extends Method implements MethodInterface {
    /**
     * Creates a new RevokeChatInviteLink method and sets the required 'invite_link' field.
     *
     * @param string $inviteLink The invite link to revoke
     */
    public function __construct(string $inviteLink) {
        parent::__construct();
        $this->addAttribute('invite_link', $inviteLink);
    }

    public function methodName(): string {
        return 'revokeChatInviteLink';
    }

    /**
     * Unique identifier of the target chat or username of the target channel in the format
     * @username
     *
     * @param int|string $chatId Unique identifier of the target chat or username of the target
     *   channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
