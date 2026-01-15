<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method CreateChatSubscriptionInviteLink
 *
 * Use this method to create a subscription invite link for a channel chat. The bot must have the can_invite_users administrator rights. The link can be edited using the method editChatSubscriptionInviteLink or revoked using the method revokeChatInviteLink. Returns the new invite link as a ChatInviteLink object.
 */
class CreateChatSubscriptionInviteLink extends Method implements MethodInterface {
    public function __construct(int|string $chatId, int $subscriptionPeriod, int $subscriptionPrice) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('subscription_period', $subscriptionPeriod);
        $this->addAttribute('subscription_price', $subscriptionPrice);
    }

    public function methodName(): string {
        return "createChatSubscriptionInviteLink";
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
}
