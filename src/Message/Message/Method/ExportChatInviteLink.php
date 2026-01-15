<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method ExportChatInviteLink
 *
 * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
 */
class ExportChatInviteLink extends Method implements MethodInterface {
    public function __construct(int|string $chatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "exportChatInviteLink";
    }


}
