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
    public function __construct(int $userId, InlineQueryResult $result) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('result', $result);
    }

    public function methodName(): string {
        return "savePreparedInlineMessage";
    }

    /**
     * @param bool $allowUserChats
     *
     * @return $this
     */
    public function allowUserChats(bool $allowUserChats): static {
        $this->addAttribute('allow_user_chats', $allowUserChats);
        return $this;
    }

    /**
     * @param bool $allowBotChats
     *
     * @return $this
     */
    public function allowBotChats(bool $allowBotChats): static {
        $this->addAttribute('allow_bot_chats', $allowBotChats);
        return $this;
    }

    /**
     * @param bool $allowGroupChats
     *
     * @return $this
     */
    public function allowGroupChats(bool $allowGroupChats): static {
        $this->addAttribute('allow_group_chats', $allowGroupChats);
        return $this;
    }

    /**
     * @param bool $allowChannelChats
     *
     * @return $this
     */
    public function allowChannelChats(bool $allowChannelChats): static {
        $this->addAttribute('allow_channel_chats', $allowChannelChats);
        return $this;
    }
}
