<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeChatAdministrators
 *
 * @see https://core.telegram.org/bots/api#BotCommandScopeChatAdministrators
 *
 * This object represents a bot command.
 */
class BotCommandScopeChatAdministrators extends Type {
    public string $type;
    public string $chatId;
}
