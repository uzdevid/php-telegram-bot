<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On
 * success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in
 * size, this limit may be changed in the future.
 *
 * Typical usage: instantiate the method with the required 'animation' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#sendanimation
 */
class SendAnimation extends Method implements MethodInterface {
    /**
     * Creates a new SendAnimation method and sets the required 'animation' field.
     *
     * @param string $animation Animation to send. Pass a file_id as String to send an animation
     *   that exists on the Telegram servers (recommended), pass an HTTP URL as a String for
     *   Telegram to get an animation from the Internet, or upload a new animation using
     *   multipart/form-data. More information on Sending Files »
     */
    public function __construct(string $animation) {
        parent::__construct();
        $this->addAttribute('animation', $animation);
    }

    public function methodName(): string {
        return 'sendAnimation';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
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
     * For outgoing ephemeral messages, unique identifier of the user who will receive the message;
     * for group and supergroup chats only. It is not guaranteed that the user will receive the
     * message, especially if they are offline. See ephemeral message sending for more details.
     *
     * @param int $receiverUserId For outgoing ephemeral messages, unique identifier of the user who
     *   will receive the message; for group and supergroup chats only. It is not guaranteed that
     *   the user will receive the message, especially if they are offline. See ephemeral message
     *   sending for more details.
     *
     * @return $this
     */
    public function receiverUserId(int $receiverUserId): static {
        $this->addAttribute('receiver_user_id', $receiverUserId);
        return $this;
    }

    /**
     * For outgoing ephemeral messages, identifier of the callback query which triggered the message
     * if any
     *
     * @param string $callbackQueryId For outgoing ephemeral messages, identifier of the callback
     *   query which triggered the message if any
     *
     * @return $this
     */
    public function callbackQueryId(string $callbackQueryId): static {
        $this->addAttribute('callback_query_id', $callbackQueryId);
        return $this;
    }

    /**
     * Duration of sent animation in seconds
     *
     * @param int $duration Duration of sent animation in seconds
     *
     * @return $this
     */
    public function duration(int $duration): static {
        $this->addAttribute('duration', $duration);
        return $this;
    }

    /**
     * Animation width
     *
     * @param int $width Animation width
     *
     * @return $this
     */
    public function width(int $width): static {
        $this->addAttribute('width', $width);
        return $this;
    }

    /**
     * Animation height
     *
     * @param int $height Animation height
     *
     * @return $this
     */
    public function height(int $height): static {
        $this->addAttribute('height', $height);
        return $this;
    }

    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A
     * thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using
     * multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so
     * you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using
     * multipart/form-data under <file_attach_name>. More information on Sending Files »
     *
     * @param string $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation
     *   for the file is supported server-side. The thumbnail should be in JPEG format and less than
     *   200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file
     *   is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only
     *   uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was
     *   uploaded using multipart/form-data under <file_attach_name>. More information on Sending
     *   Files »
     *
     * @return $this
     */
    public function thumbnail(string $thumbnail): static {
        $this->addAttribute('thumbnail', $thumbnail);
        return $this;
    }

    /**
     * Animation caption (may also be used when resending animation by file_id ), 0-1024 characters
     * after entities parsing
     *
     * @param string $caption Animation caption (may also be used when resending animation by
     *   file_id ), 0-1024 characters after entities parsing
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * Mode for parsing entities in the animation caption. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the animation caption. See formatting
     *   options for more details.
     *
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
     *
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
     *
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
     *
     * @return $this
     */
    public function showCaptionAboveMedia(bool $showCaptionAboveMedia = true): static {
        $this->addAttribute('show_caption_above_media', $showCaptionAboveMedia);
        return $this;
    }

    /**
     * Pass True if the animation needs to be covered with a spoiler animation
     *
     * @param bool $hasSpoiler Pass True if the animation needs to be covered with a spoiler
     *   animation
     *
     * @return $this
     */
    public function hasSpoiler(bool $hasSpoiler = true): static {
        $this->addAttribute('has_spoiler', $hasSpoiler);
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
     * Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @param string $messageEffectId Unique identifier of the message effect to be added to the
     *   message; for private chats only
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
