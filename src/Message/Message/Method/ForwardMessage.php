<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\SuggestedPostParameters;

/**
 * Method ForwardMessage
 *
 * Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent Message is returned.
 */
class ForwardMessage extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param int | string $fromChatId Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
     * @param int $messageId Message identifier in the chat specified in from_chat_id
     */
    public function __construct(int|string $chatId, int|string $fromChatId, int $messageId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('from_chat_id', $fromChatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return "forwardMessage";
    }

    /**
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the message will be forwarded; required if the message is forwarded to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * @param int $videoStartTimestamp New start timestamp for the forwarded video in the message
     *
     * @return $this
     */
    public function videoStartTimestamp(int $videoStartTimestamp): static {
        $this->addAttribute('video_start_timestamp', $videoStartTimestamp);
        return $this;
    }

    /**
     * @param bool $disableNotification Sends the message silently. Users will receive a notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent Protects the contents of the forwarded message from forwarding and saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param string $messageEffectId Unique identifier of the message effect to be added to the message; only available when forwarding to private chats
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param SuggestedPostParameters $suggestedPostParameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only
     *
     * @return $this
     */
    public function suggestedPostParameters(SuggestedPostParameters $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
        return $this;
    }
}
