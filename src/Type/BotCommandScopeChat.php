<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BotCommandScopeChat
 *
 * @link https://core.telegram.org/bots/api#BotCommandScopeChat
 *
 * This object represents a bot command.
 */
class BotCommandScopeChat extends Type {
    public string $type;
    public string $chatId;

}