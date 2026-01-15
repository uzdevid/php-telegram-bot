<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type KeyboardButtonRequestUsers
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 *
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
 */
class KeyboardButtonRequestUsers extends Type {
    /**
     * @var int Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
     */
    public int $requestId;

    /**
     * @var bool|null Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
     */
    public bool|null $userIsBot;

    /**
     * @var bool|null Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
     */
    public bool|null $userIsPremium;

    /**
     * @var int|null Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
     */
    public int|null $maxQuantity;

    /**
     * @var bool|null Optional. Pass True to request the users' first and last names
     */
    public bool|null $requestName;

    /**
     * @var bool|null Optional. Pass True to request the users' usernames
     */
    public bool|null $requestUsername;

    /**
     * @var bool|null Optional. Pass True to request the users' photos
     */
    public bool|null $requestPhoto;
}
