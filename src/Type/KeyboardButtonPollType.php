<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type KeyboardButtonPollType
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 *
 * This object represents type of poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
class KeyboardButtonPollType extends Type {
    public string $type;
}
