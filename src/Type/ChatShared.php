<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatShared
 *
 * @link https://core.telegram.org/bots/api#chatshared
 *
 * This object contains information about a chat that was shared with the bot using a KeyboardButtonRequestChat button.
 */
class ChatShared extends Type {
    /**
     * @var int Identifier of the request
     */
    public int $requestId;

    /**
     * @var int Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     */
    public int $chatId;

    /**
     * @var string|null Optional. Title of the chat, if the title was requested by the bot.
     */
    public string|null $title;

    /**
     * @var string|null Optional. Username of the chat, if the username was requested by the bot and available.
     */
    public string|null $username;

    /**
     * @var PhotoSize[]|null Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public array|null $photo;
}
