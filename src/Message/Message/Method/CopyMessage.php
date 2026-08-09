<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to copy messages of any kind. Service messages, paid media messages, giveaway
 * messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be
 * copied only if the value of the field correct_option_ids is known to the bot. The method is
 * analogous to the method forwardMessage , but the copied message doesn't have a link to the
 * original message. Returns the MessageId of the sent message on success.
 *
 * Typical usage: instantiate the method with the required 'from_chat_id' and 'message_id' fields,
 * then chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#copymessage
 */
class CopyMessage extends Method implements MethodInterface {
    /**
     * Creates a new CopyMessage method and sets the required 'from_chat_id' and 'message_id'
     * fields.
     *
     * @param int|string $fromChatId Unique identifier for the chat where the original message was
     *   sent (or username of the target bot, supergroup or channel in the format @username )
     * @param int $messageId Message identifier in the chat specified in from_chat_id
     */
    public function __construct(int|string $fromChatId, int $messageId) {
        parent::__construct();
        $this->addAttribute('from_chat_id', $fromChatId);
        $this->addAttribute('message_id', $messageId);
    }

    public function methodName(): string {
        return 'copyMessage';
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username
     *
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
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Identifier of the direct messages topic to which the message will be sent; required if the
     * message is sent to a direct messages chat
     *
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the
     *   message will be sent; required if the message is sent to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * New start timestamp for the copied video in the message
     *
     * @param int $videoStartTimestamp New start timestamp for the copied video in the message
     *
     * @return $this
     */
    public function videoStartTimestamp(int $videoStartTimestamp): static {
        $this->addAttribute('video_start_timestamp', $videoStartTimestamp);
        return $this;
    }

    /**
     * New caption for media, 0-1024 characters after entities parsing. If not specified, the
     * original caption is kept.
     *
     * @param string $caption New caption for media, 0-1024 characters after entities parsing. If
     *   not specified, the original caption is kept.
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * Mode for parsing entities in the new caption. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the new caption. See formatting options
     *   for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the new caption, which can be
     * specified instead of parse_mode
     *
     * @param array $captionEntities A JSON-serialized list of special entities that appear in the
     *   new caption, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function captionEntities(array $captionEntities): static {
        $this->addAttribute('caption_entities', $captionEntities);
        return $this;
    }

    /**
     * Adds one item to the caption_entities list. A JSON-serialized list of special entities that
     * appear in the new caption, which can be specified instead of parse_mode
     *
     * @param MessageEntityInterface $captionEntity Adds one item to the caption_entities list. A
     *   JSON-serialized list of special entities that appear in the new caption, which can be
     *   specified instead of parse_mode
     *
     * @return $this
     */
    public function addCaptionEntity(MessageEntityInterface $captionEntity): static {
        $this->addMessageEntity('caption_entities', $captionEntity);
        return $this;
    }

    /**
     * Pass True if the caption must be shown above the message media. Ignored if a new caption
     * isn't specified.
     *
     * @param bool $showCaptionAboveMedia Pass True if the caption must be shown above the message
     *   media. Ignored if a new caption isn't specified.
     *
     * @return $this
     */
    public function showCaptionAboveMedia(bool $showCaptionAboveMedia = true): static {
        $this->addAttribute('show_caption_above_media', $showCaptionAboveMedia);
        return $this;
    }

    /**
     * Sends the message silently . Users will receive a notification with no sound.
     *
     * @param bool $disableNotification Sends the message silently . Users will receive a
     *   notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * Protects the contents of the sent message from forwarding and saving
     *
     * @param bool $protectContent Protects the contents of the sent message from forwarding and
     *   saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of
     * 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring
     *   broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be
     *   withdrawn from the bot's balance.
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast = true): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * Unique identifier of the message effect to be added to the message; only available when
     * copying to private chats
     *
     * @param string $messageEffectId Unique identifier of the message effect to be added to the
     *   message; only available when copying to private chats
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * A JSON-serialized object containing the parameters of the suggested post to send; for direct
     * messages chats only. If the message is sent as a reply to another suggested post, then that
     * suggested post is automatically declined.
     *
     * @param mixed $suggestedPostParameters A JSON-serialized object containing the parameters of
     *   the suggested post to send; for direct messages chats only. If the message is sent as a
     *   reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return $this
     */
    public function suggestedPostParameters(mixed $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
        return $this;
    }

    /**
     * Description of the message to reply to
     *
     * @param mixed $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(mixed $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard , custom reply
     * keyboard , instructions to remove a reply keyboard or to force a reply from the user.
     *
     * @param mixed $replyMarkup Additional interface options. A JSON-serialized object for an
     *   inline keyboard , custom reply keyboard , instructions to remove a reply keyboard or to
     *   force a reply from the user.
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
