<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit animation, audio, document, live photo, photo, or video messages, or to
 * replace a text or a rich message with a media. If a message is part of a message album, then it
 * can be edited only to an audio for audio albums, only to a document for document albums and to a
 * photo, a live photo, or a video otherwise. When an inline message is edited, a new file can't be
 * uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the
 * edited message is not an inline message, the edited Message is returned, otherwise True is
 * returned. Note that business messages that were not sent by the bot and do not contain an inline
 * keyboard can only be edited within 48 hours from the time they were sent.
 *
 * Typical usage: instantiate the method with the required 'media' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#editmessagemedia
 */
class EditMessageMedia extends Method implements MethodInterface {
    /**
     * Creates a new EditMessageMedia method and sets the required 'media' field.
     *
     * @param mixed $media A JSON-serialized object for the new media content of the message
     */
    public function __construct(mixed $media) {
        parent::__construct();
        $this->addAttribute('media', $media);
    }

    public function methodName(): string {
        return 'editMessageMedia';
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
     * A JSON-serialized object for a new inline keyboard
     *
     * @param mixed $replyMarkup A JSON-serialized object for a new inline keyboard
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
