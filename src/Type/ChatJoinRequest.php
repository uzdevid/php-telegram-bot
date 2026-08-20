<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatJoinRequest
 *
 * @see https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest extends Type {
    /**
     * Chat to which the request was sent
     */
    public Chat $chat;
    /**
     * User that sent the join request
     */
    public User $from;
    /**
     * Identifier of a private chat with the user who sent the join request. This number may have more than 32
     * significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it
     * has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this
     * identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed,
     * assuming no other administrator contacted the user.
     */
    public int $userChatId;
    /**
     * Date the request was sent in Unix time
     */
    public int $date;
    /**
     * Optional. Bio of the user
     */
    public string $bio;
    /**
     * Optional. Chat invite link that was used by the user to send the join request
     */
    public ChatInviteLink $inviteLink;
}
