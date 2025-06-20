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


    public int $id;
    public bool $isBot;
    public string $firstName;
    public string $lastName;
    public string $username;
    public string $languageCode;
    public bool $isPremium;
    public bool $addedToAttachmentMenu;
    public bool $canJoinGroups;
    public bool $canReadAllGroupMessages;
    public bool $supportsInlineQueries;
}