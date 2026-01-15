<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberUpdated
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 *
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends Type {
    /**
     * @var Chat Chat the user belongs to
     */
    public Chat $chat;

    /**
     * @var User Performer of the action, which resulted in the change
     */
    public User $from;

    /**
     * @var int Date the change was done in Unix time
     */
    public int $date;

    /**
     * @var ChatMember Previous information about the chat member
     */
    public ChatMember $oldChatMember;

    /**
     * @var ChatMember New information about the chat member
     */
    public ChatMember $newChatMember;

    /**
     * @var ChatInviteLink|null Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     */
    public ChatInviteLink|null $inviteLink;

    /**
     * @var bool|null Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
     */
    public bool|null $viaJoinRequest;

    /**
     * @var bool|null Optional. True, if the user joined the chat via a chat folder invite link
     */
    public bool|null $viaChatFolderInviteLink;
}
