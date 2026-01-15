<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method CreateChatInviteLink
 *
 * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 */
class CreateChatInviteLink extends Method implements MethodInterface {
    public function __construct(int|string $chatId) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "createChatInviteLink";
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }

    /**
     * @param int $expireDate
     *
     * @return $this
     */
    public function expireDate(int $expireDate): static {
        $this->addAttribute('expire_date', $expireDate);
        return $this;
    }

    /**
     * @param int $memberLimit
     *
     * @return $this
     */
    public function memberLimit(int $memberLimit): static {
        $this->addAttribute('member_limit', $memberLimit);
        return $this;
    }

    /**
     * @param bool $createsJoinRequest
     *
     * @return $this
     */
    public function createsJoinRequest(bool $createsJoinRequest): static {
        $this->addAttribute('creates_join_request', $createsJoinRequest);
        return $this;
    }
}
