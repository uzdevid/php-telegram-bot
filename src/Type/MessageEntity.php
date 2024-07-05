<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageEntity
 *
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
class MessageEntity extends Type {
    public string $type;
    public int $offset;
    public int $length;
    public string $url;
    public User $user;
    public string $language;
    public string $customEmojiId;
}