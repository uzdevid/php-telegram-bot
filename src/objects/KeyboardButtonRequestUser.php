<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type KeyboardButtonRequestUser
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestuser
 *
 * This object defines the criteria used to request a suitable user.
 * The identifier of the selected user will be shared with the bot when the corresponding button is pressed.
 * More about requesting users (https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @property int $requestId
 * @property bool $userIsBot
 * @property bool $userIsPremium
 */
class KeyboardButtonRequestUser extends BaseObject { }