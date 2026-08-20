<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberUpdated
 *
 * @see https://core.telegram.org/bots/api#chatmemberupdated
 *
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends Type {
    /**
     * Chat the user belongs to
     */
    public Chat $chat;
    /**
     * Performer of the action, which resulted in the change
     */
    public User $from;
    /**
     * Date the change was done in Unix time
     */
    public int $date;
    /**
     * Previous information about the chat member
     */
    public array $oldChatMember;
    /**
     * New information about the chat member
     */
    public array $newChatMember;
    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only
     */
    public ChatInviteLink $inviteLink;
    /**
     * Optional. True, if the user joined the chat via a chat folder invite link
     */
    public bool $viaChatFolderInviteLink;
}
