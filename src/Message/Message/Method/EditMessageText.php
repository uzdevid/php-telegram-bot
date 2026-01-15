<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\LinkPreviewOptions;

/**
 * Method EditMessageText
 *
 * Use this method to edit text and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 */
class EditMessageText extends Method implements MethodInterface {

    /**
     * @param string $text New text of the message, 1-4096 characters after entities parsing
     */
    public function __construct(string $text) {
        parent::__construct();

        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return "editMessageText";
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
     * @param string $parseMode Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @return $this
     */
    public function parseMode(string $parseMode): static {
        $this->addAttribute('parse_mode', $parseMode);
        return $this;
    }

    /**
     * @param array $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     *
     * @return $this
     */
    public function entities(array $entities): static {
        $this->addAttribute('entities', $entities);
        return $this;
    }

    /**
     * @param LinkPreviewOptions $linkPreviewOptions Link preview generation options for the message
     *
     * @return $this
     */
    public function linkPreviewOptions(LinkPreviewOptions $linkPreviewOptions): static {
        $this->addAttribute('link_preview_options', $linkPreviewOptions);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for an inline keyboard.
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
