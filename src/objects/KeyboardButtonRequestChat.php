<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type KeyboardButtonRequestChat
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 *
 * This object defines the criteria used to request a suitable chat.
 * The identifier of the selected chat will be shared with the bot when the corresponding button is pressed.
 * More about requesting chats (https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @property int $requestId
 * @property bool $chatIsChannel
 * @property bool $chatIsForum
 * @property bool $chatHasUsername
 * @property bool $chatIsCreated
 * @property ChatAdministratorRights $chatAdministratorRights
 * @property ChatAdministratorRights $botAdministratorRights
 * @property bool $botIsMember
 */
class KeyboardButtonRequestChat extends BaseObject { }