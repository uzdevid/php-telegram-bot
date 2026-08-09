<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method when you need to tell the user that something is happening on the bot's side. The
 * status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear
 * its typing status). Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'action' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#sendchataction
 */
class SendChatAction extends Method implements MethodInterface {
    /**
     * Creates a new SendChatAction method and sets the required 'action' field.
     *
     * @param string $action Type of action to broadcast. Choose one, depending on what the user is
     *   about to receive: typing for text messages , upload_photo for photos , record_video or
     *   upload_video for videos , record_voice or upload_voice for voice notes , upload_document
     *   for general files , choose_sticker for stickers , find_location for location data ,
     *   record_video_note or upload_video_note for video notes .
     */
    public function __construct(string $action) {
        parent::__construct();
        $this->addAttribute('action', $action);
    }

    public function methodName(): string {
        return 'sendChatAction';
    }

    /**
     * Unique identifier of the business connection on behalf of which the action will be sent
     *
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of
     *   which the action will be sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * Unique identifier for the target chat or username of the target bot or supergroup in the
     * format @username . Channel chats and channel direct messages chats aren't supported.
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target bot
     *   or supergroup in the format @username . Channel chats and channel direct messages chats
     *   aren't supported.
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Unique identifier for the target message thread or topic of a forum; for supergroups and
     * private chats of bots with forum topic mode enabled only
     *
     * @param int $messageThreadId Unique identifier for the target message thread or topic of a
     *   forum; for supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }
}
