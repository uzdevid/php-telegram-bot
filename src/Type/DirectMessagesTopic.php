<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type DirectMessagesTopic
 *
 * @link https://core.telegram.org/bots/api#directmessagestopic
 *
 * Describes a topic of a direct messages chat.
 */
class DirectMessagesTopic extends Type {
    /**
     * @var int Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int $topicId;

    /**
     * @var User|null Optional. Information about the user that created the topic. Currently, it is always present
     */
    public User|null $user;
}
