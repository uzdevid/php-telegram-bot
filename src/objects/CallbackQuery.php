<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

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
class CallbackQuery extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
            'message' => Message::class,
        ];
    }
}