<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ForceReply;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\InputFile;
use UzDevid\Telegram\Bot\Type\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\ReplyKeyboardRemove;
use UzDevid\Telegram\Bot\Type\ReplyParameters;
use UzDevid\Telegram\Bot\Type\SuggestedPostParameters;

/**
 * Method SendVideo
 *
 * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 */
class SendVideo extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @param InputFile | string $video Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. More information on Sending Files »
     */
    public function __construct(int|string $chatId, InputFile|string $video) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('video', $video);
    }

    public function methodName(): string {
        return "sendVideo";
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
     * @param int $duration Duration of sent video in seconds
     *
     * @return $this
     */
    public function duration(int $duration): static {
        $this->addAttribute('duration', $duration);
        return $this;
    }

    /**
     * @param int $width Video width
     *
     * @return $this
     */
    public function width(int $width): static {
        $this->addAttribute('width', $width);
        return $this;
    }

    /**
     * @param int $height Video height
     *
     * @return $this
     */
    public function height(int $height): static {
        $this->addAttribute('height', $height);
        return $this;
    }

    /**
     * @param InputFile | string $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     *
     * @return $this
     */
    public function thumbnail(InputFile|string $thumbnail): static {
        $this->addAttribute('thumbnail', $thumbnail);
        return $this;
    }

    /**
     * @param InputFile | string $cover Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     *
     * @return $this
     */
    public function cover(InputFile|string $cover): static {
        $this->addAttribute('cover', $cover);
        return $this;
    }

    /**
     * @param int $startTimestamp Start timestamp for the video in the message
     *
     * @return $this
     */
    public function startTimestamp(int $startTimestamp): static {
        $this->addAttribute('start_timestamp', $startTimestamp);
        return $this;
    }

    /**
     * @param string $caption Video caption (may also be used when resending videos by file_id), 0-1024 characters after entities parsing
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param string $parseMode Mode for parsing entities in the video caption. See formatting options for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $captionEntities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function captionEntities(array $captionEntities): static {
        $this->addAttribute('caption_entities', $captionEntities);
        return $this;
    }

    /**
     * @param bool $showCaptionAboveMedia Pass True, if the caption must be shown above the message media
     *
     * @return $this
     */
    public function showCaptionAboveMedia(bool $showCaptionAboveMedia): static {
        $this->addAttribute('show_caption_above_media', $showCaptionAboveMedia);
        return $this;
    }

    /**
     * @param bool $hasSpoiler Pass True if the video needs to be covered with a spoiler animation
     *
     * @return $this
     */
    public function hasSpoiler(bool $hasSpoiler): static {
        $this->addAttribute('has_spoiler', $hasSpoiler);
        return $this;
    }

    /**
     * @param bool $supportsStreaming Pass True if the uploaded video is suitable for streaming
     *
     * @return $this
     */
    public function supportsStreaming(bool $supportsStreaming): static {
        $this->addAttribute('supports_streaming', $supportsStreaming);
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
