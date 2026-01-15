<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method LeaveChat
 *
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 */
class LeaveChat extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername). Channel direct messages chats aren't supported; leave the corresponding channel instead.
     */
    public function __construct(int|string $chatId) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
    }

    public function methodName(): string {
        return "leaveChat";
    }


}
