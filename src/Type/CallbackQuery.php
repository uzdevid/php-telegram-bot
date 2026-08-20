<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type CallbackQuery
 *
 * @see https://core.telegram.org/bots/api#callbackquery
 *
 * This object represents an incoming callback query from a callback button in an inline keyboard.
 * If the button that originated the query was attached to a message sent by the bot, the field message will be present.
 * If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present.
 * Exactly one of the fields data or game_short_name will be present.
 *
 * @property int $updateId
 * @property string $id
 * @property User $from
 * @property Message $message
 * @property string $inlineMessageId
 * @property string $chatInstance
 * @property string $data
 * @property string $gameShortName
 */
class CallbackQuery extends Type {
    public int $updateId;
    /**
     * Unique identifier for this query
     */
    public string $id;
    /**
     * Sender
     */
    public User $from;
    /**
     * Optional. Message sent by the bot with the callback button that originated the query
     */
    public Message $message;
    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query
     */
    public string $inlineMessageId;
    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     * Useful for high scores in games.
     */
    public string $chatInstance;
    /**
     * Optional. Data associated with the callback button. Be aware that the message originated the query can contain
     * no callback buttons with this data.
     */
    public string $data;
    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    public string $gameShortName;
}
