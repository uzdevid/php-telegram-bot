<?php

namespace uzdevid\telegram\bot\message\messages;

use uzdevid\telegram\bot\BaseBot;
use uzdevid\telegram\bot\message\messages\entity\MessageEntityInterface;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;

class Method extends BaseBot {
    /**
     * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     *
     * @param string $messageThreadId
     *
     * @return static
     */
    public function messageThreadId(string $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Sends the message silently. Users will receive a notification with no sound.
     *
     * @param bool $disableNotification
     *
     * @return static
     */
    public function disableNotification(bool $disableNotification = true): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @param string $name
     * @param MessageEntityInterface $entity
     *
     * @return static
     */
    public function addMessageEntity(string $name, MessageEntityInterface $entity): static {
        $this->pushAttribute($name, $entity);
        return $this;
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @param int $replyToMessageId
     *
     * @return static
     */
    public function replyToMessageId(int $replyToMessageId): static {
        $this->addAttribute('reply_to_message_id', $replyToMessageId);
        return $this;
    }

    /**
     * Pass True if the message should be sent even if the specified replied-to message is not found
     *
     * @param bool $allowSendingWithoutReply
     *
     * @return static
     */
    public function allowSendingWithoutReply(bool $allowSendingWithoutReply = true): static {
        $this->addAttribute('allow_sending_without_reply', $allowSendingWithoutReply);
        return $this;
    }

    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     *
     * @param ReplyMarkupInterface $replyMarkup
     *
     * @return static
     */
    public function addReplyMarkup(ReplyMarkupInterface $replyMarkup): static {
        $serialized = json_encode($replyMarkup->getAttributes(), JSON_UNESCAPED_UNICODE);
        $this->addAttribute('reply_markup', $serialized);
        return $this;
    }

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }
}