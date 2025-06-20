<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type KeyboardButtonRequestUser
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestuser
 *
 * This object defines the criteria used to request a suitable user.
 * The identifier of the selected user will be shared with the bot when the corresponding button is pressed.
 * More about requesting users (https://core.telegram.org/bots/features#chat-and-user-selection)
 */
class KeyboardButtonRequestUser extends Type {
    public int $requestId;
    public bool $userIsBot;
    public bool $userIsPremium;
}