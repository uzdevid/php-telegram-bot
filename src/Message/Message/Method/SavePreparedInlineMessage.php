<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineQueryResult;

/**
 * Method SavePreparedInlineMessage
 *
 * Stores a message that can be sent by a user of a Mini App. Returns a PreparedInlineMessage object.
 */
class SavePreparedInlineMessage extends Method implements MethodInterface {

    /**
     * @param int $userId Unique identifier of the target user that can use the prepared message
     * @param InlineQueryResult $result A JSON-serialized object describing the message to be sent
     */
    public function __construct(int $userId, InlineQueryResult $result) {
        parent::__construct();

        $this->addAttribute('user_id', $userId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return "savePreparedInlineMessage";
    }

    /**
     * @param bool $allowUserChats Pass True if the message can be sent to private chats with users
     *
     * @return $this
     */
    public function allowUserChats(bool $allowUserChats): static {
        $this->addAttribute('allow_user_chats', $allowUserChats);
        return $this;
    }

    /**
     * @param bool $allowBotChats Pass True if the message can be sent to private chats with bots
     *
     * @return $this
     */
    public function allowBotChats(bool $allowBotChats): static {
        $this->addAttribute('allow_bot_chats', $allowBotChats);
        return $this;
    }

    /**
     * @param bool $allowGroupChats Pass True if the message can be sent to group and supergroup chats
     *
     * @return $this
     */
    public function allowGroupChats(bool $allowGroupChats): static {
        $this->addAttribute('allow_group_chats', $allowGroupChats);
        return $this;
    }

    /**
     * @param bool $allowChannelChats Pass True if the message can be sent to channel chats
     *
     * @return $this
     */
    public function allowChannelChats(bool $allowChannelChats): static {
        $this->addAttribute('allow_channel_chats', $allowChannelChats);
        return $this;
    }
}
