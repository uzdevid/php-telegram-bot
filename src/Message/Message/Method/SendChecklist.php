<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send a checklist on behalf of a connected business account. On success, the
 * sent Message is returned.
 *
 * Typical usage: instantiate the method with the required 'business_connection_id' and 'checklist'
 * fields, then chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#sendchecklist
 */
class SendChecklist extends Method implements MethodInterface {
    /**
     * Creates a new SendChecklist method and sets the required 'business_connection_id' and
     * 'checklist' fields.
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be sent
     * @param mixed $checklist A JSON-serialized object for the checklist to send
     */
    public function __construct(string $businessConnectionId, mixed $checklist) {
        parent::__construct();
        $this->addAttribute('business_connection_id', $businessConnectionId);
        $this->addAttribute('checklist', $checklist);
    }

    public function methodName(): string {
        return 'sendChecklist';
    }

    /**
     * Unique identifier for the target chat or username of the target bot in the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target bot
     *   in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Sends the message silently. Users will receive a notification with no sound.
     *
     * @param bool $disableNotification Sends the message silently. Users will receive a
     *   notification with no sound.
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * Protects the contents of the sent message from forwarding and saving
     *
     * @param bool $protectContent Protects the contents of the sent message from forwarding and
     *   saving
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * Unique identifier of the message effect to be added to the message
     *
     * @param string $messageEffectId Unique identifier of the message effect to be added to the
     *   message
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * A JSON-serialized object for description of the message to reply to
     *
     * @param mixed $replyParameters A JSON-serialized object for description of the message to
     *   reply to
     * @return $this
     */
    public function replyParameters(mixed $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
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
