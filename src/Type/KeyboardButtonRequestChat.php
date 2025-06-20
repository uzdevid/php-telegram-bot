<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type KeyboardButtonRequestChat
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 *
 * This object defines the criteria used to request a suitable chat.
 * The identifier of the selected chat will be shared with the bot when the corresponding button is pressed.
 * More about requesting chats (https://core.telegram.org/bots/features#chat-and-user-selection)
 */
class KeyboardButtonRequestChat extends Type {
    public int $requestId;
    public bool $chatIsChannel;
    public bool $chatIsForum;
    public bool $chatHasUsername;
    public bool $chatIsCreated;
    public ChatAdministratorRights $chatAdministratorRights;
    public ChatAdministratorRights $botAdministratorRights;
    public bool $botIsMember;
}