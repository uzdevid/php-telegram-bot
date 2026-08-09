<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to add a message to the list of pinned messages in a chat. In private chats and
 * channel direct messages chats, all non-service messages can be pinned. Conversely, the bot must
 * be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to pin
 * messages in groups and channels respectively. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'message_id' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#pinchatmessage
 */
class PinChatMessage extends Method implements MethodInterface {
    /**
     * Creates a new PinChatMessage method and sets the required 'message_id' field.
     *
     * @param int $messageId Identifier of a message to pin
     */
    public function __construct(int $messageId) {
        parent::__construct();
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'pinChatMessage';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message will be pinned
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be pinned
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
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

    /**
     * Pass True if it is not necessary to send a notification to all chat members about the new
     * pinned message. Notifications are always disabled in channels and private chats.
     *
     * @param bool $disableNotification Pass True if it is not necessary to send a notification to
     *   all chat members about the new pinned message. Notifications are always disabled in
     *   channels and private chats.
     * @return $this
     */
    public function disableNotification(bool $disableNotification = true): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }
}
