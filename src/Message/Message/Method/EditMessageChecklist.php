<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to edit a checklist on behalf of a connected business account. On success, the
 * edited Message is returned.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id', 'message_id',
 * and 'checklist' fields, then chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#editmessagechecklist
 */
class EditMessageChecklist extends Method implements MethodInterface {
    /**
     * Creates a new EditMessageChecklist method and sets the required 'business_connection_id',
     * 'message_id', and 'checklist' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be sent
     * @param int $messageId Unique identifier for the target message
     * @param mixed $checklist A JSON-serialized object for the new checklist
     */
    public function __construct(string $businessConnectionId, int $messageId, mixed $checklist) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('message_id', $messageId);
        $this->addAttribute('checklist', $checklist);
    }

    public function methodName(): string {
        return 'editMessageChecklist';
    }

    /**
     * Unique identifier for the target chat or username of the target bot in the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target bot
     *   in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * A JSON-serialized object for the new inline keyboard for the message
     *
     * @param mixed $replyMarkup A JSON-serialized object for the new inline keyboard for the
     *   message
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
