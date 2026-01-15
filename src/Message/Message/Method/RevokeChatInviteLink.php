<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method RevokeChatInviteLink
 *
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
 */
class RevokeChatInviteLink extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier of the target chat or username of the target channel (in the format @channelusername)
     * @param string $inviteLink The invite link to revoke
     */
    public function __construct(int|string $chatId, string $inviteLink) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('invite_link', $inviteLink);
    }

    public function methodName(): string {
        return "revokeChatInviteLink";
    }


}
