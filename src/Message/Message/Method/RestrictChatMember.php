<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ChatPermissions;

/**
 * Method RestrictChatMember
 *
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
 */
class RestrictChatMember extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $userId, ChatPermissions $permissions) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('permissions', $permissions);
    }

    public function methodName(): string {
        return "restrictChatMember";
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

    /**
     * @param int $untilDate
     *
     * @return $this
     */
    public function untilDate(int $untilDate): static {
        $this->addAttribute('until_date', $untilDate);
        return $this;
    }
}
