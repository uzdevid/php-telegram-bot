<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type User
 *
 * @see https://core.telegram.org/bots/api#user
 *
 * This object represents a Telegram user or bot.
 */
class User extends Type {
    /**
     * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming
     * languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a
     * 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $id;
    /**
     * True, if this user is a bot
     */
    public bool $isBot;
    /**
     * User's or bot's first name
     */
    public string $firstName;
    /**
     * Optional. User's or bot's last name
     */
    public string $lastName;
    /**
     * Optional. User's or bot's username
     */
    public string $username;
    /**
     * Optional. IETF language tag of the user's language
     */
    public string $languageCode;
    /**
     * Optional. True, if this user is a Telegram Premium user
     */
    public bool $isPremium;
    /**
     * Optional. True, if this user added the bot to the attachment menu
     */
    public bool $addedToAttachmentMenu;
    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     */
    public bool $canJoinGroups;
    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     */
    public bool $canReadAllGroupMessages;
    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    public bool $supportsInlineQueries;
}
