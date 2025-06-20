<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberMember
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @property string $status
 * @property User $user
 */
class ChatMemberMember extends Type {
    public string $status;
    public User $user;
}