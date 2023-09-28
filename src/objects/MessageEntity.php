<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type MessageEntity
 *
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @property string $type
 * @property int $offset
 * @property int $length
 * @property string $url
 * @property User $user
 * @property string $language
 * @property string $customEmojiId
 */
class MessageEntity extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'user' => User::class
        ];
    }
}