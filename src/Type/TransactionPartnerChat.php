<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type TransactionPartnerChat
 *
 * @link https://core.telegram.org/bots/api#transactionpartnerchat
 *
 * Describes a transaction with a chat.
 */
class TransactionPartnerChat extends Type {
    /**
     * @var string Type of the transaction partner, always “chat”
     */
    public string $type;

    /**
     * @var Chat Information about the chat
     */
    public Chat $chat;

    /**
     * @var Gift|null Optional. The gift sent to the chat by the bot
     */
    public Gift|null $gift;
}
