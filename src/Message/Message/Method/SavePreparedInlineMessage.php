<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Stores a message that can be sent by a user of a Mini App. Returns a PreparedInlineMessage
 * object.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'result' fields, then chain
 * optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#savepreparedinlinemessage
 */
class SavePreparedInlineMessage extends Method implements MethodInterface {
    /**
     * Creates a new SavePreparedInlineMessage method and sets the required 'user_id' and 'result'
     * fields.
     *
     * @param int $userId Unique identifier of the target user that can use the prepared message
     * @param mixed $result A JSON-serialized object describing the message to be sent
     */
    public function __construct(int $userId, mixed $result) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return 'savePreparedInlineMessage';
    }

    /**
     * Pass True if the message can be sent to private chats with users
     *
     * @param bool $allowUserChats Pass True if the message can be sent to private chats with users
     * @return $this
     */
    public function allowUserChats(bool $allowUserChats = true): static {
        $this->addAttribute('allow_user_chats', $allowUserChats);
        return $this;
    }

    /**
     * Pass True if the message can be sent to private chats with bots
     *
     * @param bool $allowBotChats Pass True if the message can be sent to private chats with bots
     * @return $this
     */
    public function allowBotChats(bool $allowBotChats = true): static {
        $this->addAttribute('allow_bot_chats', $allowBotChats);
        return $this;
    }

    /**
     * Pass True if the message can be sent to group and supergroup chats
     *
     * @param bool $allowGroupChats Pass True if the message can be sent to group and supergroup
     *   chats
     * @return $this
     */
    public function allowGroupChats(bool $allowGroupChats = true): static {
        $this->addAttribute('allow_group_chats', $allowGroupChats);
        return $this;
    }

    /**
     * Pass True if the message can be sent to channel chats
     *
     * @param bool $allowChannelChats Pass True if the message can be sent to channel chats
     * @return $this
     */
    public function allowChannelChats(bool $allowChannelChats = true): static {
        $this->addAttribute('allow_channel_chats', $allowChannelChats);
        return $this;
    }
}
