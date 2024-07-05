<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatShared
 *
 * @link https://core.telegram.org/bots/api#chatshared
 *
 * This object contains information about the chat whose identifier was shared with the bot using a KeyboardButtonRequestChat button.
 */
class ChatShared extends Type {
    public int $requestId;
    public int $chatId;
}