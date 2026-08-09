<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to copy messages of any kind. If some of the specified messages can't be found or
 * copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway
 * winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the
 * value of the field correct_option_ids is known to the bot. The method is analogous to the method
 * forwardMessages , but the copied messages don't have a link to the original message. Album
 * grouping is kept for copied messages. On success, an Array of MessageId of the sent messages is
 * returned.
 *
 * Typical usage: instantiate the method with the required 'from_chat_id' and 'message_ids' fields,
 * then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#copymessages
 */
class CopyMessages extends Method implements MethodInterface {
    /**
     * Creates a new CopyMessages method and sets the required 'from_chat_id' and 'message_ids'
     * fields.
     *
     * @param int|string $fromChatId Unique identifier for the chat where the original messages were
     *   sent (or username of the target bot, supergroup or channel in the format @username )
     * @param array $messageIds A JSON-serialized list of 1-100 identifiers of messages in the chat
     *   from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
     */
    public function __construct(int|string $fromChatId, array $messageIds) {
        parent::__construct();
        $this->addAttribute('from_chat_id', $fromChatId);
        $this->addAttribute('message_ids', $messageIds);
    }

    public function methodName(): string {
        return 'copyMessages';
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

    /**
     * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and
     * private chats of bots with forum topic mode enabled only
     *
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a
     *   forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Identifier of the direct messages topic to which the messages will be sent; required if the
     * messages are sent to a direct messages chat
     *
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the
     *   messages will be sent; required if the messages are sent to a direct messages chat
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * Sends the messages silently . Users will receive a notification with no sound.
     *
     * @param bool $disableNotification Sends the messages silently . Users will receive a
     *   notification with no sound.
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * Protects the contents of the sent messages from forwarding and saving
     *
     * @param bool $protectContent Protects the contents of the sent messages from forwarding and
     *   saving
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * Pass True to copy the messages without their captions
     *
     * @param bool $removeCaption Pass True to copy the messages without their captions
     * @return $this
     */
    public function removeCaption(bool $removeCaption = true): static {
        $this->addAttribute('remove_caption', $removeCaption);
        return $this;
    }
}
