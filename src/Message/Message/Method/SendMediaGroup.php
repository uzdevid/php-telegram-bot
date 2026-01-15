<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ReplyParameters;

/**
 * Method SendMediaGroup
 *
 * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Message objects that were sent is returned.
 */
class SendMediaGroup extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param array $media A JSON-serialized array describing messages to be sent, must include 2-10 items
     */
    public function __construct(int|string $chatId, array $media) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('media', $media);
    }

    public function methodName(): string {
        return "sendMediaGroup";
    }

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
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
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * @param bool $disableNotification Sends messages silently. Users will receive a notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent Protects the contents of the sent messages from forwarding and saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * @param string $messageEffectId Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param ReplyParameters $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(ReplyParameters $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }
}
