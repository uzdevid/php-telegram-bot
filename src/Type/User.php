<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type User
 *
 * @link https://core.telegram.org/bots/api#user
 *
 * This object represents a Telegram user or bot.
 */
class User extends Type {
    /**
     * @var int Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $id;

    /**
     * @var bool True, if this user is a bot
     */
    public bool $isBot;

    /**
     * @var string User's or bot's first name
     */
    public string $firstName;

    /**
     * @var string|null Optional. User's or bot's last name
     */
    public string|null $lastName;

    /**
     * @var string|null Optional. User's or bot's username
     */
    public string|null $username;

    /**
     * @var string|null Optional. IETF language tag of the user's language
     */
    public string|null $languageCode;

    /**
     * @var bool|null Optional. True, if this user is a Telegram Premium user
     */
    public bool|null $isPremium;

    /**
     * @var bool|null Optional. True, if this user added the bot to the attachment menu
     */
    public bool|null $addedToAttachmentMenu;

    /**
     * @var bool|null Optional. True, if the bot can be invited to groups. Returned only in getMe.
     */
    public bool|null $canJoinGroups;

    /**
     * @var bool|null Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     */
    public bool|null $canReadAllGroupMessages;

    /**
     * @var bool|null Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    public bool|null $supportsInlineQueries;

    /**
     * @var bool|null Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe.
     */
    public bool|null $canConnectToBusiness;

    /**
     * @var bool|null Optional. True, if the bot has a main Web App. Returned only in getMe.
     */
    public bool|null $hasMainWebApp;

    /**
     * @var bool|null Optional. True, if the bot has forum topic mode enabled in private chats. Returned only in getMe.
     */
    public bool|null $hasTopicsEnabled;
}
