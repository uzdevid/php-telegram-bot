<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class BanChatMember extends Method implements MethodInterface {
    /**
     * @param int $userId
     */
    public function __construct(int $userId) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'banChatMember';
    }

    /**
     * @param int $timestamp
     * @return $this
     */
    public function untilDate(int $timestamp): static {
        $this->addAttribute('until_date', $timestamp);
        return $this;
    }

    /**
     * @param bool $revoke
     * @return $this
     */
    public function revokeMessages(bool $revoke = true): static {
        $this->addAttribute('revoke_messages', $revoke);
        return $this;
    }
}