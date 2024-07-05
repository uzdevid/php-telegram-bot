<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type CallbackQuery
 *
 * @link https://core.telegram.org/bots/api#callbackquery
 *
 * This object represents an incoming callback query from a callback button in an inline keyboard.
 * If the button that originated the query was attached to a message sent by the bot, the field message will be present.
 * If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present.
 * Exactly one of the fields data or game_short_name will be present.
 *
 * @property int $updateId
 * @property int $id
 * @property User $from
 * @property Message $message
 * @property string $data
 */
class CallbackQuery extends Type {
    public int $updateId;
    public int $id;
    public User $from;
    public Message $message;
    public string $data;
}