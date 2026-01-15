<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type GeneralForumTopicUnhidden
 *
 * @link https://core.telegram.org/bots/api#generalforumtopicunhidden
 *
 * This object represents a service message about General forum topic unhidden in the chat. Currently holds no information.
 */
class GeneralForumTopicUnhidden extends Type {
    /**
     * @var int Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     */
    public int $userId;

    /**
     * @var string|null Optional. First name of the user, if the name was requested by the bot
     */
    public string|null $firstName;

    /**
     * @var string|null Optional. Last name of the user, if the name was requested by the bot
     */
    public string|null $lastName;

    /**
     * @var string|null Optional. Username of the user, if the username was requested by the bot
     */
    public string|null $username;

    /**
     * @var PhotoSize[]|null Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public array|null $photo;
}
