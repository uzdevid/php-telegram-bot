<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit an ephemeral text message. Note that it is not guaranteed that the user
 * will receive the message edit event, especially if they are offline. On success, True is
 * returned.
 *
 * Typical usage: instantiate the method with the required 'receiver_user_id',
 * 'ephemeral_message_id', and 'text' fields, then chain optional builder methods before dispatching
 * the request.
 *
 * @see https://core.telegram.org/bots/api#editephemeralmessagetext
 */
class EditEphemeralMessageText extends Method implements MethodInterface {
    /**
     * Creates a new EditEphemeralMessageText method and sets the required 'receiver_user_id',
     * 'ephemeral_message_id', and 'text' fields.
     *
     * @param int $receiverUserId Identifier of the user who received the message
     * @param int $ephemeralMessageId Identifier of the ephemeral message to edit
     * @param string $text New text of the message, 1-4096 characters after entity parsing
     */
    public function __construct(int $receiverUserId, int $ephemeralMessageId, string $text) {
        parent::__construct();
        $this->addAttribute('receiver_user_id', $receiverUserId);
        $this->addAttribute('ephemeral_message_id', $ephemeralMessageId);
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return 'editEphemeralMessageText';
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
     * Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the message text. See formatting
     *   options for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * A JSON-serialized list of special entities that appear in message text, which can be
     * specified instead of parse_mode
     *
     * @param array $entities A JSON-serialized list of special entities that appear in message
     *   text, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function entities(array $entities): static {
        $this->addAttribute('entities', $entities);
        return $this;
    }

    /**
     * Adds one item to the entities list. A JSON-serialized list of special entities that appear in
     * message text, which can be specified instead of parse_mode
     *
     * @param MessageEntityInterface $entity Adds one item to the entities list. A JSON-serialized
     *   list of special entities that appear in message text, which can be specified instead of
     *   parse_mode
     *
     * @return $this
     */
    public function addEntity(MessageEntityInterface $entity): static {
        $this->addMessageEntity('entities', $entity);
        return $this;
    }

    /**
     * Link preview generation options for the message
     *
     * @param mixed $linkPreviewOptions Link preview generation options for the message
     *
     * @return $this
     */
    public function linkPreviewOptions(mixed $linkPreviewOptions): static {
        $this->addAttribute('link_preview_options', $linkPreviewOptions);
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
