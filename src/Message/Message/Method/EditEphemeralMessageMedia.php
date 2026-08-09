<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit the media of an ephemeral message. Note that it is not guaranteed that
 * the user will receive the message edit event, especially if they are offline. On success, True is
 * returned.
 *
 * Typical usage: instantiate the method with the required 'receiver_user_id',
 * 'ephemeral_message_id', and 'media' fields, then chain optional builder methods before
 * dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#editephemeralmessagemedia
 */
class EditEphemeralMessageMedia extends Method implements MethodInterface {
    /**
     * Creates a new EditEphemeralMessageMedia method and sets the required 'receiver_user_id',
     * 'ephemeral_message_id', and 'media' fields.
     *
     * @param int $receiverUserId Identifier of the user who received the message
     * @param int $ephemeralMessageId Identifier of the ephemeral message to edit
     * @param mixed $media A JSON-serialized object for the new media content of the message. A new
     *   file can't be uploaded; use a previously uploaded file via its file_id or specify a URL.
     */
    public function __construct(int $receiverUserId, int $ephemeralMessageId, mixed $media) {
        parent::__construct();
        $this->addAttribute('receiver_user_id', $receiverUserId);
        $this->addAttribute('ephemeral_message_id', $ephemeralMessageId);
        $this->addAttribute('media', $media);
    }

    public function methodName(): string {
        return 'editEphemeralMessageMedia';
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
