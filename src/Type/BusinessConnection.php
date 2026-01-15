<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BusinessConnection
 *
 * @link https://core.telegram.org/bots/api#businessconnection
 *
 * Describes the connection of the bot with a business account.
 */
class BusinessConnection extends Type {
    /**
     * @var string Unique identifier of the business connection
     */
    public string $id;

    /**
     * @var User Business account user that created the business connection
     */
    public User $user;

    /**
     * @var int Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $userChatId;

    /**
     * @var int Date the connection was established in Unix time
     */
    public int $date;

    /**
     * @var BusinessBotRights|null Optional. Rights of the business bot
     */
    public BusinessBotRights|null $rights;

    /**
     * @var bool True, if the connection is active
     */
    public bool $isEnabled;
}
