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

    /**
     * @param int | string $chatId Unique identifier for the target channel chat or username of the target channel (in the format @channelusername)
     * @param int $subscriptionPeriod The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
     * @param int $subscriptionPrice The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-10000
     */
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
     * @param string $name Invite link name; 0-32 characters
     *
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }
}
