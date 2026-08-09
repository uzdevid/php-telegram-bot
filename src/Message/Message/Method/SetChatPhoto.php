<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private
 * chats. The bot must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'photo' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setchatphoto
 */
class SetChatPhoto extends Method implements MethodInterface {
    /**
     * Creates a new SetChatPhoto method and sets the required 'photo' field.
     *
     * @param string $photo New chat photo, uploaded using multipart/form-data
     */
    public function __construct(string $photo) {
        parent::__construct();
        $this->addAttribute('photo', $photo);
    }

    public function methodName(): string {
        return 'setChatPhoto';
    }

    /**
     * Unique identifier for the target chat or username of the target channel in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   channel in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
