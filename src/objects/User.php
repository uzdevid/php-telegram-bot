<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type User
 *
 * @link https://core.telegram.org/bots/api#user
 *
 * This object represents a Telegram user or bot.
 *
 * @property int $id
 * @property bool $isBot
 * @property string $firstName
 * @property string $lastName
 * @property string $username
 * @property string $languageCode
 * @property bool $isPremium
 * @property bool $addedToAttachmentMenu
 * @property bool $canJoinGroups
 * @property bool $canReadAllGroupMessages
 * @property bool $supportsInlineQueries
 */
class User extends BaseObject { }