<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\InputMedia;

/**
 * Method EditMessageMedia
 *
 * Use this method to edit animation, audio, document, photo, or video messages, or to add media to text messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 */
class EditMessageMedia extends Method implements MethodInterface {

    /**
     * @param InputMedia $media A JSON-serialized object for a new media content of the message
     */
    public function __construct(InputMedia $media) {
        parent::__construct();

        $this->addAttribute('media', $media);
    }

    public function methodName(): string {
        return "editMessageMedia";
    }

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message to be edited was sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param int | string $chatId Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param int $messageId Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * @param string $inlineMessageId Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for a new inline keyboard.
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
