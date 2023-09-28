<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Chat
 *
 * @link https://core.telegram.org/bots/api#chat
 *
 * This object represents a chat.
 *
 * @property int $id
 * @property string $type
 * @property string $title
 * @property string|null $username
 * @property string $firstName
 * @property string $lastName
 * @property bool $isForum
 * @property bool $chatPhoto
 * @property array $activeUsernames
 * @property string $emojiStatusCustomEmojiId
 * @property string $bio
 * @property bool $hasPrivateForwards
 * @property bool $hasRestrictedVoiceAndVideoMessages
 * @property bool $joinToSendMessages
 * @property bool $joinByRequest
 * @property string $description
 * @property string $inviteLink
 * @property int $pinnedMessage
 * @property int $permissions
 * @property int $slowModeDelay
 * @property int $messageAutoDeleteTime
 * @property bool $hasAggressiveAntiSpamEnabled
 * @property bool $hasHiddenMembers
 * @property bool $hasProtectedContent
 * @property string $stickerSetName
 * @property bool $canSetStickerSet
 * @property bool $linkedChatId
 * @property bool $location
 */
class Chat extends BaseObject { }