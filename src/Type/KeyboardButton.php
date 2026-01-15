<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type KeyboardButton
 *
 * @link https://core.telegram.org/bots/api#keyboardbutton
 *
 * This object represents one button of the reply keyboard. At most one of the optional fields must be used to specify type of the button. For simple text buttons, String can be used instead of this object to specify the button text.
 */
class KeyboardButton extends Type {
    /**
     * @var string Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     */
    public string $text;

    /**
     * @var KeyboardButtonRequestUsers|null Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
     */
    public KeyboardButtonRequestUsers|null $requestUsers;

    /**
     * @var KeyboardButtonRequestChat|null Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
     */
    public KeyboardButtonRequestChat|null $requestChat;

    /**
     * @var bool|null Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     */
    public bool|null $requestContact;

    /**
     * @var bool|null Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
     */
    public bool|null $requestLocation;

    /**
     * @var KeyboardButtonPollType|null Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     */
    public KeyboardButtonPollType|null $requestPoll;

    /**
     * @var WebAppInfo|null Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
     */
    public WebAppInfo|null $webApp;
}
