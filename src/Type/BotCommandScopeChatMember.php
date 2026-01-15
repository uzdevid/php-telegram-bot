<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeChatMember
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechatmember
 *
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
class BotCommandScopeChatMember extends Type {
    /**
     * @var string Scope type, must be chat_member
     */
    public string $type;

    /**
     * @var int | string Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername). Channel direct messages chats and channel chats aren't supported.
     */
    public int | string $chatId;

    /**
     * @var int Unique identifier of the target user
     */
    public int $userId;
}
