<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatJoinRequest
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest extends Type {
    public Chat $chat;
    public User $from;
    public int $userChatId;
    public int $date;
    public string $bio;
    public ChatInviteLink $inviteLink;
}