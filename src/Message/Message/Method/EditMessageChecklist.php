<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\InputChecklist;

/**
 * Method EditMessageChecklist
 *
 * Use this method to edit a checklist on behalf of a connected business account. On success, the edited Message is returned.
 */
class EditMessageChecklist extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message will be sent
     * @param int $chatId Unique identifier for the target chat
     * @param int $messageId Unique identifier for the target message
     * @param InputChecklist $checklist A JSON-serialized object for the new checklist
     */
    public function __construct(string $businessConnectionId, int $chatId, int $messageId, InputChecklist $checklist) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('message_id', $messageId);
        $this->addAttribute('checklist', $checklist);
    }

    public function methodName(): string {
        return "editMessageChecklist";
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for the new inline keyboard for the message
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
