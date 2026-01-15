<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\InputChecklist;
use UzDevid\Telegram\Bot\Type\ReplyParameters;

/**
 * Method SendChecklist
 *
 * Use this method to send a checklist on behalf of a connected business account. On success, the sent Message is returned.
 */
class SendChecklist extends Method implements MethodInterface {

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message will be sent
     * @param int $chatId Unique identifier for the target chat
     * @param InputChecklist $checklist A JSON-serialized object for the checklist to send
     */
    public function __construct(string $businessConnectionId, int $chatId, InputChecklist $checklist) {
        parent::__construct();

        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('checklist', $checklist);
    }

    public function methodName(): string {
        return "sendChecklist";
    }

    /**
     * @param bool $disableNotification Sends the message silently. Users will receive a notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent Protects the contents of the sent message from forwarding and saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param string $messageEffectId Unique identifier of the message effect to be added to the message
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param ReplyParameters $replyParameters A JSON-serialized object for description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(ReplyParameters $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for an inline keyboard
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
