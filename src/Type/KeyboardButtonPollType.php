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
    /**
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is
     * passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     */
    public string $type;
}
