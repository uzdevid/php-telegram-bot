<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit the caption of an ephemeral message. Note that it is not guaranteed that
 * the user will receive the message edit event, especially if they are offline. On success, True is
 * returned.
 *
 * Typical usage: instantiate the method with the required 'receiver_user_id' and
 * 'ephemeral_message_id' fields, then chain optional builder methods before dispatching the
 * request.
 *
 * @see https://core.telegram.org/bots/api#editephemeralmessagecaption
 */
class EditEphemeralMessageCaption extends Method implements MethodInterface {
    /**
     * Creates a new EditEphemeralMessageCaption method and sets the required 'receiver_user_id' and
     * 'ephemeral_message_id' fields.
     *
     * @param int $receiverUserId Identifier of the user who received the message
     * @param int $ephemeralMessageId Identifier of the ephemeral message to edit
     */
    public function __construct(int $receiverUserId, int $ephemeralMessageId) {
        parent::__construct();
        $this->addAttribute('receiver_user_id', $receiverUserId);
        $this->addAttribute('ephemeral_message_id', $ephemeralMessageId);
    }

    public function methodName(): string {
        return 'editEphemeralMessageCaption';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
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
