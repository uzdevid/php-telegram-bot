<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit text, rich and game messages. On success, if the edited message is not an
 * inline message, the edited Message is returned, otherwise True is returned. Note that business
 * messages that were not sent by the bot and do not contain an inline keyboard can only be edited
 * within 48 hours from the time they were sent.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#editmessagetext
 */
class EditMessageText extends Method implements MethodInterface {
    public function methodName(): string {
        return 'editMessageText';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message to be edited was
     * sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message to be edited was sent
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
     *   @username .
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
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }

    /**
     * New text of the message, 1-4096 characters after entity parsing; required if rich_message
     * isn't specified
     *
     * @param string $text New text of the message, 1-4096 characters after entity parsing; required
     *   if rich_message isn't specified
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @param string $parseMode Mode for parsing entities in the message text. See formatting
     *   options for more details.
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
     * @return $this
     */
    public function linkPreviewOptions(mixed $linkPreviewOptions): static {
        $this->addAttribute('link_preview_options', $linkPreviewOptions);
        return $this;
    }

    /**
     * New rich content of the message; required if text isn't specified. Direct upload of new files
     * isn't supported when an inline message is edited.
     *
     * @param mixed $richMessage New rich content of the message; required if text isn't specified.
     *   Direct upload of new files isn't supported when an inline message is edited.
     * @return $this
     */
    public function richMessage(mixed $richMessage): static {
        $this->addAttribute('rich_message', $richMessage);
        return $this;
    }

    /**
     * A JSON-serialized object for an inline keyboard
     *
     * @param mixed $replyMarkup A JSON-serialized object for an inline keyboard
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
