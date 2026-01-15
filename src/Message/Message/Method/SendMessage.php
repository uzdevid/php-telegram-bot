<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ForceReply;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\LinkPreviewOptions;
use UzDevid\Telegram\Bot\Type\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\ReplyKeyboardRemove;
use UzDevid\Telegram\Bot\Type\ReplyParameters;
use UzDevid\Telegram\Bot\Type\SuggestedPostParameters;

/**
 * Method SendMessage
 *
 * Use this method to send text messages. On success, the sent Message is returned.
 */
class SendMessage extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     */
    public function __construct(int|string $chatId, string $text) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return "sendMessage";
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
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the message will be sent; required if the message is sent to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * @param string $parseMode Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function entities(array $entities): static {
        $this->addAttribute('entities', $entities);
        return $this;
    }

    /**
     * @param LinkPreviewOptions $linkPreviewOptions Link preview generation options for the message
     *
     * @return $this
     */
    public function linkPreviewOptions(LinkPreviewOptions $linkPreviewOptions): static {
        $this->addAttribute('link_preview_options', $linkPreviewOptions);
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
     * @param bool $protectContent Protects the contents of the sent message from forwarding and saving
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
     * @param SuggestedPostParameters $suggestedPostParameters A JSON-serialized object containing the parameters of the suggested post to send; for direct messages chats only. If the message is sent as a reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return $this
     */
    public function suggestedPostParameters(SuggestedPostParameters $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
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

    /**
     * @param InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
