<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to send text messages. On success, the sent Message is returned.
 *
 * Typical usage: instantiate the method with the required 'text' field, then chain optional builder
 * methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#sendmessage
 */
class SendMessage extends Method implements MethodInterface {
    /**
     * Creates a new SendMessage method and sets the required 'text' field.
     *
     * @param string $text Text of the message to be sent, 1-4096 characters after entities parsing
     */
    public function __construct(string $text) {
        parent::__construct();
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return 'sendMessage';
    }

    /**
     * Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the message will be sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Unique identifier for the target chat or username of the target bot, supergroup or channel in
     * the format @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   bot, supergroup or channel in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and
     * private chats of bots with forum topic mode enabled only
     *
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a
     *   forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * Identifier of the direct messages topic to which the message will be sent; required if the
     * message is sent to a direct messages chat
     *
     * @param int $directMessagesTopicId Identifier of the direct messages topic to which the
     *   message will be sent; required if the message is sent to a direct messages chat
     *
     * @return $this
     */
    public function directMessagesTopicId(int $directMessagesTopicId): static {
        $this->addAttribute('direct_messages_topic_id', $directMessagesTopicId);
        return $this;
    }

    /**
     * For outgoing ephemeral messages, unique identifier of the user who will receive the message;
     * for group and supergroup chats only. It is not guaranteed that the user will receive the
     * message, especially if they are offline. See ephemeral message sending for more details.
     *
     * @param int $receiverUserId For outgoing ephemeral messages, unique identifier of the user who
     *   will receive the message; for group and supergroup chats only. It is not guaranteed that
     *   the user will receive the message, especially if they are offline. See ephemeral message
     *   sending for more details.
     *
     * @return $this
     */
    public function receiverUserId(int $receiverUserId): static {
        $this->addAttribute('receiver_user_id', $receiverUserId);
        return $this;
    }

    /**
     * For outgoing ephemeral messages, identifier of the callback query which triggered the message
     * if any
     *
     * @param string $callbackQueryId For outgoing ephemeral messages, identifier of the callback
     *   query which triggered the message if any
     *
     * @return $this
     */
    public function callbackQueryId(string $callbackQueryId): static {
        $this->addAttribute('callback_query_id', $callbackQueryId);
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
     * Sends the message silently . Users will receive a notification with no sound.
     *
     * @param bool $disableNotification Sends the message silently . Users will receive a
     *   notification with no sound.
     *
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
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of
     * 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
     *
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring
     *   broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be
     *   withdrawn from the bot's balance.
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast = true): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @param string $messageEffectId Unique identifier of the message effect to be added to the
     *   message; for private chats only
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * A JSON-serialized object containing the parameters of the suggested post to send; for direct
     * messages chats only. If the message is sent as a reply to another suggested post, then that
     * suggested post is automatically declined.
     *
     * @param mixed $suggestedPostParameters A JSON-serialized object containing the parameters of
     *   the suggested post to send; for direct messages chats only. If the message is sent as a
     *   reply to another suggested post, then that suggested post is automatically declined.
     *
     * @return $this
     */
    public function suggestedPostParameters(mixed $suggestedPostParameters): static {
        $this->addAttribute('suggested_post_parameters', $suggestedPostParameters);
        return $this;
    }

    /**
     * Description of the message to reply to
     *
     * @param mixed $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(mixed $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard , custom reply
     * keyboard , instructions to remove a reply keyboard or to force a reply from the user.
     *
     * @param mixed $replyMarkup Additional interface options. A JSON-serialized object for an
     *   inline keyboard , custom reply keyboard , instructions to remove a reply keyboard or to
     *   force a reply from the user.
     *
     * @return $this
     */
    public function replyMarkup(mixed $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
