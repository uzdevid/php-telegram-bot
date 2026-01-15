<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ChatPermissions;

/**
 * Method SetChatPermissions
 *
 * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
 */
class SetChatPermissions extends Method implements MethodInterface {
    public function __construct(int|string $chatId, ChatPermissions $permissions) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('permissions', $permissions);
    }

    public function methodName(): string {
        return "setChatPermissions";
    }

    /**
     * @param bool $useIndependentChatPermissions
     *
     * @return $this
     */
    public function useIndependentChatPermissions(bool $useIndependentChatPermissions): static {
        $this->addAttribute('use_independent_chat_permissions', $useIndependentChatPermissions);
        return $this;
    }
}
