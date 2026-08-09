<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit captions of messages. On success, if the edited message is not an inline
 * message, the edited Message is returned, otherwise True is returned. Note that business messages
 * that were not sent by the bot and do not contain an inline keyboard can only be edited within 48
 * hours from the time they were sent.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#editmessagecaption
 */
class EditMessageCaption extends Method implements MethodInterface {
    public function methodName(): string {
        return 'editMessageCaption';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message to be edited was
     * sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message to be edited was sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Required if inline_message_id is not specified. Unique identifier for the target chat or
     * username of the target bot, supergroup or channel in the format @username .
     *
     * @param int|string $chatId Required if inline_message_id is not specified. Unique identifier
     *   for the target chat or username of the target bot, supergroup or channel in the format
     *
     *   @username .
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Required if inline_message_id is not specified. Identifier of the message to edit.
     *
     * @param int $messageId Required if inline_message_id is not specified. Identifier of the
     *   message to edit.
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * Required if chat_id and message_id are not specified. Identifier of the inline message.
     *
     * @param string $inlineMessageId Required if chat_id and message_id are not specified.
     *   Identifier of the inline message.
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }

    /**
     * New caption of the message, 0-1024 characters after entities parsing
     *
     * @param string $caption New caption of the message, 0-1024 characters after entities parsing
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * Mode for parsing entities in the message caption. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the message caption. See formatting
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
     * Pass True if the caption must be shown above the message media. Supported only for animation,
     * photo and video messages.
     *
     * @param bool $showCaptionAboveMedia Pass True if the caption must be shown above the message
     *   media. Supported only for animation, photo and video messages.
     *
     * @return $this
     */
    public function showCaptionAboveMedia(bool $showCaptionAboveMedia = true): static {
        $this->addAttribute('show_caption_above_media', $showCaptionAboveMedia);
        return $this;
    }

    /**
     * A JSON-serialized object for an inline keyboard
     *
     * @param mixed $replyMarkup A JSON-serialized object for an inline keyboard
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
