<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type UsersShared
 *
 * @link https://core.telegram.org/bots/api#usersshared
 *
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
class UsersShared extends Type {
    /**
     * @var int Identifier of the request
     */
    public int $requestId;

    /**
     * @var SharedUser[] Information about users shared with the bot.
     */
    public array $users;
}
