<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to delete a message, including service messages, with the following limitations:
 * - A message can only be deleted if it was sent less than 48 hours ago. - Service messages about a
 * supergroup, channel, or forum topic creation can't be deleted. - A dice message in a private chat
 * can only be deleted if it was sent more than 24 hours ago. - Bots can delete outgoing messages in
 * private chats, groups, and supergroups. - Bots can delete incoming messages in private chats. -
 * Bots granted can_post_messages permissions can delete outgoing messages in channels. - If the bot
 * is an administrator of a group, it can delete any message there. - If the bot has
 * can_delete_messages administrator right in a supergroup or a channel, it can delete any message
 * there. - If the bot has can_manage_direct_messages administrator right in a channel, it can
 * delete any message in the corresponding direct messages chat. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'message_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#deletemessage
 */
class DeleteMessage extends Method implements MethodInterface {
    /**
     * Creates a new DeleteMessage method and sets the required 'message_id' field.
     *
     * @param int $messageId Identifier of the message to delete
     */
    public function __construct(int $messageId) {
        parent::__construct();
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'deleteMessage';
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
