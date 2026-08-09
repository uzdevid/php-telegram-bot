<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send paid media. On success, the sent Message is returned.
 *
 * Typical usage: instantiate the method with the required 'star_count' and 'media' fields, then
 * chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#sendpaidmedia
 */
class SendPaidMedia extends Method implements MethodInterface {
    /**
     * Creates a new SendPaidMedia method and sets the required 'star_count' and 'media' fields.
     *
     * @param int $starCount The number of Telegram Stars that must be paid to buy access to the
     *   media; 1-25000
     * @param array $media A JSON-serialized Array describing the media to be sent; up to 10 items
     */
    public function __construct(int $starCount, array $media) {
        parent::__construct();
        $this->addAttribute('star_count', $starCount);
        $this->addAttribute('media', $media);
    }

    public function methodName(): string {
        return 'sendPaidMedia';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be sent
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username . If the chat is a channel, all Telegram Star proceeds from this media
     * will be credited to the chat's balance. Otherwise, they will be credited to the bot's
     * balance.
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username . If the chat is a channel, all Telegram
     *   Star proceeds from this media will be credited to the chat's balance. Otherwise, they will
     *   be credited to the bot's balance.
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
     * Identifier of the direct messages topic to which the message will be sent; required if the
     * message is sent to a direct messages chat
     *
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the
     *   message will be sent; required if the message is sent to a direct messages chat
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it
     * for your internal processes.
     *
     * @param string $payload Bot-defined paid media payload, 0-128 bytes. This will not be
     *   displayed to the user, use it for your internal processes.
     * @return $this
     */
    public function payload(string $payload): static {
        $this->addAttribute('payload', $payload);
        return $this;
    }

    /**
     * Media caption, 0-1024 characters after entities parsing
     *
     * @param string $caption Media caption, 0-1024 characters after entities parsing
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * Mode for parsing entities in the media caption. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the media caption. See formatting
     *   options for more details.
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in the caption, which can be specified
     * instead of parse_mode
     *
     * @param array $captionEntities A JSON-serialized list of special entities that appear in the
     *   caption, which can be specified instead of parse_mode
     * @return $this
     */
    public function captionEntities(array $captionEntities): static {
        $this->addAttribute('caption_entities', $captionEntities);
        return $this;
    }

    /**
     * Adds one item to the caption_entities list. A JSON-serialized list of special entities that
     * appear in the caption, which can be specified instead of parse_mode
     *
     * @param MessageEntityInterface $captionEntity Adds one item to the caption_entities list. A
     *   JSON-serialized list of special entities that appear in the caption, which can be specified
     *   instead of parse_mode
     * @return $this
     */
    public function addCaptionEntity(MessageEntityInterface $captionEntity): static {
        $this->addMessageEntity('caption_entities', $captionEntity);
        return $this;
    }

    /**
     * Pass True if the caption must be shown above the message media
     *
     * @param bool $showCaptionAboveMedia Pass True if the caption must be shown above the message
     *   media
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
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast = true): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
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
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
