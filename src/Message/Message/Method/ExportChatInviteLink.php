<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to generate a new primary invite link for a chat; any previously generated
 * primary link is revoked. The bot must be an administrator in the chat for this to work and must
 * have the appropriate administrator rights. Returns the new invite link as String on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#exportchatinvitelink
 */
class ExportChatInviteLink extends Method implements MethodInterface {
    public function methodName(): string {
        return 'exportChatInviteLink';
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
